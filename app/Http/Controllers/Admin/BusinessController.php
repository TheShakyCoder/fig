<?php

namespace App\Http\Controllers\Admin;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;
use App\Models\Business;

class BusinessController extends Controller
{
    private function filtered(Request $request)
    {
        return Business::query()
            ->when($request->search, fn ($q, $search) => $q
                ->where('name', 'like', "%{$search}%")
                ->orWhere('domain', 'like', "%{$search}%")
                ->orWhere('address', 'like', "%{$search}%")
                ->orWhere('postcode', 'like', "%{$search}%")
            )
            ->latest();
    }

    public function index(Request $request): Response
    {
        $businesses = $this->filtered($request)
            ->paginate(10)
            ->withQueryString();

        return Inertia::render('Admin/Businesses/Index', [
            'businesses' => $businesses,
            'filters' => $request->only('search'),
        ]);
    }

    public function report(Request $request)
    {
        $businesses = $this->filtered($request)->get();

        $pdf = Pdf::loadView('admin.businesses.report', [
            'businesses' => $businesses,
            'search' => $request->search,
            'generatedAt' => now(),
        ])->setPaper('a4', 'landscape');

        $filename = 'businesses-report-' . now()->format('Y-m-d') . '.pdf';

        return $pdf->stream($filename);
    }

    public function create(): Response
    {
        return Inertia::render('Admin/Businesses/Create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'domain' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'postcode' => 'nullable|string|max:10',
        ]);

        Business::create($validated);

        return redirect()->route('admin.businesses.index')
            ->with('success', 'Business created.');
    }

    public function show(Business $business): Response
    {
        return Inertia::render('Admin/Businesses/Show', [
            'business' => $business,
        ]);
    }

    public function edit(Business $business): Response
    {
        return Inertia::render('Admin/Businesses/Edit', [
            'business' => $business,
        ]);
    }

    public function update(Request $request, Business $business): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'domain' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'postcode' => 'nullable|string|max:10',
        ]);

        $business->update($validated);

        return redirect()->route('admin.businesses.index')
            ->with('success', 'Business updated.');
    }

    public function destroy(Business $business): RedirectResponse
    {
        $business->delete();

        return redirect()->route('admin.businesses.index')
            ->with('success', 'Business deleted.');
    }
}
