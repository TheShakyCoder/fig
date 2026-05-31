<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class BusinessController extends Controller
{
    public function index(Request $request): Response
    {
        $businesses = Business::query()
            ->when($request->search, fn ($q, $search) => $q
                ->where('name', 'like', "%{$search}%")
                ->orWhere('domain', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
            )
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return Inertia::render('Businesses/Index', [
            'businesses' => $businesses,
            'filters' => $request->only('search'),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Businesses/Create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'domain' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'plan' => 'nullable|in:bronze,silver,gold',
            'status' => 'nullable|in:unknown,active,suspended,cancelled',
            'notes' => 'nullable|string',
        ]);

        Business::create($validated);

        return redirect()->route('businesses.index')
            ->with('success', 'Business created.');
    }

    public function show(Business $business): Response
    {
        return Inertia::render('Businesses/Show', [
            'business' => $business,
        ]);
    }

    public function edit(Business $business): Response
    {
        return Inertia::render('Businesses/Edit', [
            'business' => $business,
        ]);
    }

    public function update(Request $request, Business $business): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'domain' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'plan' => 'nullable|in:bronze,silver,gold',
            'status' => 'nullable|in:unknown,active,suspended,cancelled',
            'notes' => 'nullable|string',
        ]);

        $business->update($validated);

        return redirect()->route('businesses.index')
            ->with('success', 'Business updated.');
    }

    public function destroy(Business $business): RedirectResponse
    {
        $business->delete();

        return redirect()->route('businesses.index')
            ->with('success', 'Business deleted.');
    }
}
