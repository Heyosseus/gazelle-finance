<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() : View
    {
        $employees = Cache::remember('employees', now()->addHours(48), function () {
            return Employee::where('deleted_at', '=', null)->get();
        });
        return view('admin.team', compact('employees'));
    }

    public function team() : View
    {
        $employees = Cache::remember('employees', now()->addHours(48), function () {
            return Employee::where('deleted_at', '=', null)->get();
        });
        return view('services.team', compact('employees'));
    }

    public function store(Request $request) : RedirectResponse
    {
        $attributes = request()->validate([
            'employee_name' => 'required',
            'position' => 'required',
            'about' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);


        $path = $request->file('image')->store('public/uploads');
        $image_path = Storage::url($path);

        Employee::create(array_merge($attributes, ['image' => $image_path]));

        Cache::forget('employees');

        return redirect()->back();

    }

    public function destroy($id) : RedirectResponse
    {
        $employee = Employee::findOrFail($id);

        if($employee) {
           $employee->delete();
        }

        Cache::forget('employees');

        return redirect()->back();
    }
}
