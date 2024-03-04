<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use App\Models\VacancyResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VacancyResponseController extends Controller
{
    public function index()
    {
        $responses = VacancyResponse::orderBy('id', 'DESC')->get();
        return view('admin.vacancy-responses' , compact('responses'));
    }
    public function store(Request $request) : \Illuminate\Http\RedirectResponse
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'CV' => 'required|mimes:pdf,doc,docx,txt,rtf|max:2048'
        ]);

        $path = $request->file('CV')->store('public/uploads');
        $image_path = Storage::url($path);

        VacancyResponse::create(array_merge($attributes, ['CV' => $image_path]));

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }

    public function destroy($id) : \Illuminate\Http\RedirectResponse
    {
        $response = VacancyResponse::find($id);

        if($response) {
            $response->delete();
        }
        return redirect()->back()->with('success', 'Message has been deleted successfully.');
    }
}
