<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index() : \Illuminate\View\View
    {
        $vacancies = Vacancy::orderBy('id', 'DESC')->get();
        return view('admin.vacancies', compact('vacancies'));
    }

    public function careers()
    {
        $vacancies = Vacancy::orderBy('id', 'DESC')->get();
        return view('services.careers', compact('vacancies'));
    }
    public function store(Request $request) : \Illuminate\Http\RedirectResponse
    {
        $attributes = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Vacancy::create($attributes);

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
    public function destroy($id) : \Illuminate\Http\RedirectResponse
    {
        $vacancy = Vacancy::find($id);

        if($vacancy) {
            $vacancy->delete();
        }
        return redirect()->back()->with('success', 'Message has been deleted successfully.');
    }
}
