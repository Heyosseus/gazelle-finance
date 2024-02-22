<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'company' => 'required',
            'text' => 'required'
        ]);

        Contact::create($attributes);

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
