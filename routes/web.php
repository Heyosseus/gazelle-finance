<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::view('/about', 'about');
Route::view('/products', 'products');
Route::view('/news', 'news');
Route::view('/social-impacts', 'services/social-impacts');
Route::view('/ukraine-bridge-facility', 'services/ukraine-bridge-facility');
Route::view('/careers', 'services/careers');
