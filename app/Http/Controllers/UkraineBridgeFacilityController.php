<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\UkraineBridgeFacility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UkraineBridgeFacilityController extends Controller
{
    public function index() : \Illuminate\View\View
    {
        $UkraineBridgeFacility = UkraineBridgeFacility::orderBy('id', 'DESC')->where('deleted_at' , null)->get();

        return view('admin.ukraine_bridge_facility', ['UkraineBridgeFacility' => $UkraineBridgeFacility]);
    }

    public function uk_facility() : \Illuminate\View\View
    {
        $UkraineBridgeFacility = UkraineBridgeFacility::orderBy('id', 'DESC')->where('deleted_at' , null)->get();
        return view('services.ukraine-bridge-facility', ['UkraineBridgeFacility' => $UkraineBridgeFacility]);

    }

    public function show($id) : \Illuminate\View\View
    {
        $UkraineBridgeFacility = UkraineBridgeFacility::findOrFail($id);
        return view('services.show-uk_facility', ['facility' => $UkraineBridgeFacility]);
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


        UkraineBridgeFacility::create([
            'title' => $validator['name'],
            'image' => $image_path,
            'description' => $request->input('description'),
//            'author' => Auth::user()->id,
        ]);


        return redirect()->back();
    }

    public function destroy($id) : \Illuminate\Http\RedirectResponse
    {
        $UkraineBridgeFacility = UkraineBridgeFacility::find($id);

        if ($UkraineBridgeFacility) {
            $UkraineBridgeFacility->update(['deleted_at' => now()]);
        }

        return redirect()->back();
    }
}
