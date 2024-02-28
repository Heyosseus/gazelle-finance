<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() : View
    {
        $articles = Cache::remember('articles', now()->addHours(24), function () {
            return Article::with('category')->orderBy('id', 'DESC')->limit(3)->get();
        });
        $logos = Portfolio::where('deleted_at' , null)->pluck('logo')->toArray();

        return view('home', compact('articles', 'logos'));
    }
}
