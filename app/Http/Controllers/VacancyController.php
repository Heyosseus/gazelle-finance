<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class VacancyController extends Controller
{
    public function index() : \Illuminate\View\View
    {
        $vacancies = Cache::remember('vacancies', now()->addHours(24), function () {
            return Vacancy::orderBy('id', 'DESC')->get();
        });
        return view('admin.vacancies', compact('vacancies'));
    }

    public function careers() : \Illuminate\View\View
    {
        $vacancies = Cache::remember('vacancies', now()->addHours(24), function () {
            return Vacancy::orderBy('id', 'DESC')->get();
        });
        return view('services.careers', compact('vacancies'));
    }
    public function store(Request $request) : \Illuminate\Http\RedirectResponse
    {
        $attributes = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Vacancy::create($attributes);
        Cache::forget('vacancies');

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
    public function destroy($id) : \Illuminate\Http\RedirectResponse
    {
        $vacancy = Vacancy::find($id);

        if($vacancy) {
            $vacancy->delete();
            Cache::forget('vacancies');
        }
        return redirect()->back()->with('success', 'Message has been deleted successfully.');
    }
}
