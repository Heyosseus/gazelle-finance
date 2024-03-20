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
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    public function getArticles(): \Illuminate\Support\Collection
    {
        return Cache::remember('articles', now()->addHours(24), function () {
            return Article::with('category')->latest()->get();
        });
    }

    public function getCategories(): array
    {
        return Category::pluck('title', 'id')->toArray();
    }

    public function index(): View
    {
        $articles = $this->getArticles();
        $categories = $this->getCategories();

        return view('admin.articles', compact('articles', 'categories'));
    }


    public function store(Request $request) : \Illuminate\Http\RedirectResponse
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
            'user_id' => Auth::user()->id,
            'categories_id' => $category_ids,
        ]);

        Cache::forget('articles');


        return redirect()->back();
    }

    public function destroy($id) : \Illuminate\Http\RedirectResponse
    {
        $articles = Article::find($id);

        if ($articles) {
            $articles->update(['deleted_at' => now()]);
            Cache::forget('articles');
            Cache::forget('article' . $id);
        }

        return redirect()->back();
    }
    public function logout(): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');

    }
}
