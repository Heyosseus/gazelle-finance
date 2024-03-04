<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() : \Illuminate\View\View
    {
        $responses = Contact::orderBy('id', 'DESC')->get();
        return view('admin.contact-responses', compact('responses'));
    }
    public function store(Request $request) : \Illuminate\Http\RedirectResponse
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
    public function destroy($id) : \Illuminate\Http\RedirectResponse
    {
          $contact = Contact::find($id);

          if($contact) {
              $contact->delete();
          }
          return redirect()->back()->with('success', 'Message has been deleted successfully.');
    }
}
