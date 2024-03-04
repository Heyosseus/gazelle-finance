<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ContactController extends Controller
{
    public function index() : \Illuminate\View\View
    {
        $responses = Cache::remember('contact', now()->addHours(24), function () {
            return Contact::orderBy('id', 'DESC')->get();
        });
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
        Cache::forget('contact');

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
    public function destroy($id) : \Illuminate\Http\RedirectResponse
    {
          $contact = Contact::find($id);

          if($contact) {
              $contact->delete();
              Cache::forget('contact');
          }
          return redirect()->back()->with('success', 'Message has been deleted successfully.');
    }
}
