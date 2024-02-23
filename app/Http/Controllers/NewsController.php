<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index() : View
    {
        $news = News::orderBy('id', 'DESC')->where('deleted_at' , null)->get();

        return view('admin.news', ['news' => $news]);
    }

    public function show($id) : View
    {
        $article = Article::findOrFail($id);
        return view('show-news', ['article' => $article]);
    }


    public function store(Request $request) : RedirectResponse
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'url' => 'required|string',
        ]);

        News::create([
            'title' => $validator['name'],
            'url' => $validator['url'],
        ]);


        return redirect()->back();
    }

    public function destroy($id) : RedirectResponse
    {
        $News = News::find($id);

        if ($News) {
            $News->update(['deleted_at' => now()]);
        }

        return redirect()->back();
    }
}
