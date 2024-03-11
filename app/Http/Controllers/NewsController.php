<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    public function index() : View
    {
        $news = Cache::remember('news_links', now()->addHours(24), function () {
            return News::orderBy('id', 'DESC')->where('deleted_at', null)->get();
        });

        return view('admin.news', ['news' => $news]);
    }

    public function news(Article $article): View
    {
        $links = Cache::remember('news_links', now()->addHours(24), function () {
            return News::all();
        });
        $articles = Cache::remember('articles-page' . request('page', 1), now()->addDay(), function () {
            return Article::with('user')->latest()->paginate(2);
        });


        return view('news', compact('articles' , 'links'));
    }


    public function show($id) : View
    {
        $article = Cache::remember('article' . $id, now()->addHours(24), function () use ($id) {
            return Article::findOrFail($id);
        });

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

        Cache::forget('news_links');

        return redirect()->back();
    }

    public function destroy($id) : RedirectResponse
    {
        $News = News::find($id);

        if ($News) {
            $News->update(['deleted_at' => now()]);
            Cache::forget('news_links');
        }

        return redirect()->back();
    }
}
