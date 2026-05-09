<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FlyerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'plans' => config('app.plans'),
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('businesses', BusinessController::class);
    Route::get('/businesses/{business}/flyer', FlyerController::class)->name('businesses.flyer');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/preview/{business}', function (\App\Models\Business $business) {
    return \Inertia\Inertia::render('Preview', [
        'business' => $business->only('name', 'domain'),
        'plans' => config('app.plans'),
    ]);
})->name('preview');

require __DIR__.'/auth.php';
