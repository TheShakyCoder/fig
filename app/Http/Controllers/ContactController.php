<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'postcode' => 'nullable|string|max:10',
            'message' => 'nullable|string|max:2000',
            'domain' => 'nullable|string|max:50',
        ]);

        Contact::create($validated);

        return back();
    }
}
