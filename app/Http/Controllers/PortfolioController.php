<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class PortfolioController extends Controller
{
    public function index() : View
    {
        $portfolio = Cache::remember('portfolio', now()->addHours(24), function () {
            return Portfolio::orderBy('id', 'DESC')->where('deleted_at' , null)->get();
        });

        return view('admin.portfolio', ['portfolio' => $portfolio]);
    }

    public function portfolio() : View
    {
        $portfolio = Cache::remember('portfolio', now()->addHours(24), function () {
            return Portfolio::orderBy('id', 'DESC')->where('deleted_at' , null)->get();
        });

        return view('gazelles', ['portfolio' => $portfolio]);
    }



    public function store(Request $request) : \Illuminate\Http\RedirectResponse
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'company' => 'required',
            'industry' => 'required',
            'location' => 'required',
            'website' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);


        $path = $request->file('image')->store('public/uploads');
        $image_path = Storage::url($path);

        $path1 = $request->file('logo')->store('public/uploads');
        $image_path1 = Storage::url($path1);


        $car = Portfolio::create([
            'title' => $validator['name'],
            'description' => $request->input('description'),
            'company' => $request->input('company'),
            'industry' => $request->input('industry'),
            'location' => $request->input('location'),
            'website_url' => $request->input('website'),
            'image' => $image_path,
            'logo' => $image_path1,
        ]);

        Cache::forget('portfolio');
        return redirect()->back();
    }

    public function destroy($id) : \Illuminate\Http\RedirectResponse
    {
        $portfolio = Portfolio::find($id);

        if ($portfolio) {
            $portfolio->update(['deleted_at' => now()]);
            Cache::forget('portfolio');
        }

        return redirect()->back();
    }
}
