<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->where('deleted_at' , null)->get();
        $categories = Category::orderBy('id', 'DESC')->where('deleted_at' , null)->get();

        return view('admin.articles', ['articles' => $articles , 'categories' => $categories]);
    }

    public function deleteArticle($id)
    {
        $articles = Article::find($id);

        if ($articles) {
            $articles->update(['deleted_at' => now()]);
        }

        return redirect()->back();
    }

    public function createArticle(Request $request)
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
            'categories_id' => json_encode($category_ids),
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
