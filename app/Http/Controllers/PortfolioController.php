<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::orderBy('id', 'DESC')->where('deleted_at' , null)->get();

        return view('admin.portfolio', ['portfolio' => $portfolio]);
    }

    public function deletePortfolio($id)
    {
        $portfolio = Portfolio::find($id);

        if ($portfolio) {
            $portfolio->update(['deleted_at' => now()]);
        }

        return redirect()->back();
    }

    public function createPortfolio(Request $request)
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
            'author' => Auth::user()->id,
        ]);


        return redirect()->back();
    }
}
