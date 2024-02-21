<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\News;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function getArticlesAndCategories(): array
    {
        $articles = Article::with('category')->latest()->get();
        $categories = Category::pluck('title', 'id')->toArray();

        return compact('articles', 'categories');
    }

    public function index(): View
    {
        $data = $this->getArticlesAndCategories();

        return view('admin.articles', $data);
    }

    public function news(Article $article): View
    {
        $links = News::all();
        $articles = $article->paginate(2);

        return view('news', compact('articles' , 'links'));
    }

    public function deleteArticle($id) : \Illuminate\Http\RedirectResponse
    {
        $articles = Article::find($id);

        if ($articles) {
            $articles->update(['deleted_at' => now()]);
        }

        return redirect()->back();
    }

    public function createArticle(Request $request) : \Illuminate\Http\RedirectResponse
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'category.*' => 'required',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);


        $category_ids = '';
        if (isset($validator['category'])){
            foreach ($validator['category'] as $c) {
                $category = Category::where('id', $c)->first();

                if ($category) {
                    $category_ids .=  ' ' . $category->id;
                }
            }
        }


        $path = $request->file('images')->store('public/uploads');
        $image_path = Storage::url($path);


        $car = Article::create([
            'title' => $validator['name'],
            'photo' => $image_path,
            'description' => $request->input('description'),
            'author' => Auth::user()->id,
            'categories_id' => $category_ids,
        ]);


        return redirect()->back();
    }

    public function logout(): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        Session::flush();
        Auth::logout();

        return redirect(route('admin'));

    }
}
