<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Cache::remember('products', now()->addDay(), function () {
            return Products::orderBy('id', 'DESC')->where('deleted_at', null)->get();
        });

        return view('admin.products', ['products' => $products]);
    }


    public function store(Request $request) : \Illuminate\Http\RedirectResponse
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);


        $path = $request->file('image')->store('public/uploads');
        $image_path = Storage::url($path);


        $car = Products::create([
            'title' => $validator['name'],
            'image' => $image_path,
            'description' => $request->input('description'),
            'author' => Auth::user()->id,
        ]);

        Cache::forget('products');
        return redirect()->back();
    }

    public function destroy($id) : \Illuminate\Http\RedirectResponse
    {
        $products = Products::find($id);

        if ($products) {
            $products->update(['deleted_at' => now()]);
            Cache::forget('products');
        }

        return redirect()->back();
    }

}
