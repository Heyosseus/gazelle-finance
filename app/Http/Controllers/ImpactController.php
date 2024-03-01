<?php

namespace App\Http\Controllers;

use App\Models\Impact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class ImpactController extends Controller
{
    public function index() : View
    {
        $impacts = Cache::remember('impacts', now()->addHours(24), function () {
            return Impact::orderBy('id', 'DESC')->where('deleted_at' , null)->get();
        });

        return view('admin.impacts', ['impacts' => $impacts]);
    }

    public function impact_stories() : View
    {
        $impacts = Cache::remember('impacts', now()->addHours(24), function () {
            return Impact::orderBy('id', 'DESC')->where('deleted_at' , null)->get();
        });

        return view('services.social-impacts', ['impacts' => $impacts]);
    }


    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
            'position' => 'required|string',
        ]);

        $path = $request->file('image')->store('public/uploads');
        $image_path = Storage::url($path);

        Impact::create([
            'image' => $image_path,
            'description' => $validator['description'],
            'author' => $validator['name'],
            'position' => $validator['position'],
        ]);

        Cache::forget('impacts');

        return redirect()->back();
    }

    public function destroy($id) : \Illuminate\Http\RedirectResponse
    {
        $impacts = Impact::find($id);

        if ($impacts) {
            $impacts->update(['deleted_at' => now()]);
            Cache::forget('impacts');
        }

        return redirect()->back();
    }

}
