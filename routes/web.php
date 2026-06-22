<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'plans' => config('app.plans'),
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::middleware('is_admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', function () {
            return Inertia::render('Admin/Dashboard');
        })->name('admin.dashboard');
        
        Route::get('/businesses/report', [\App\Http\Controllers\Admin\BusinessController::class, 'report'])->name('businesses.report');
        Route::resource('businesses', \App\Http\Controllers\Admin\BusinessController::class);
        Route::get('/promoted-businesses/{business}', [\App\Http\Controllers\Admin\PromotedBusinessController::class, 'show'])->name('promoted-businesses.show');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/terms', fn () => Inertia::render('Legal/Terms'))->name('terms');
Route::get('/privacy', fn () => Inertia::render('Legal/Privacy'))->name('privacy');

Route::get('/preview/{business}', function (\App\Models\Business $business) {
    return \Inertia\Inertia::render('Preview', [
        'business' => $business->only('name', 'domain'),
        'plans' => config('app.plans'),
    ]);
})->name('preview');

require __DIR__.'/auth.php';
