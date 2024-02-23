<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->where('deleted_at' , null)->get();

        return view('admin.categories', ['categories' => $categories]);
    }



    public function store(Request $request) : \Illuminate\Http\RedirectResponse
    {
        $validator = $request->validate([
            'name' => 'required|string',
        ]);

        $car = Category::create([
            'title' => $validator['name'],
        ]);


        return redirect()->back();
    }
    public function destroy($id) : \Illuminate\Http\RedirectResponse
    {
        $Category = Category::find($id);

        if ($Category) {
            $Category->update(['deleted_at' => now()]);
        }

        return redirect()->back();
    }

}
