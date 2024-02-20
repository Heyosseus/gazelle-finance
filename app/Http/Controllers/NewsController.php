<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'DESC')->where('deleted_at' , null)->get();

        return view('admin.news', ['news' => $news]);
    }

    public function deleteNews($id)
    {
        $News = News::find($id);

        if ($News) {
            $News->update(['deleted_at' => now()]);
        }

        return redirect()->back();
    }

    public function createNews(Request $request)
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
}
