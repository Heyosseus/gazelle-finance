<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::get('/signout', function (){
        Session::flush();
        Auth::logout();
        return redirect(route('admin.home'));
    })->name('admin.logout');

//    Articles
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/articles/delete/{id}', [AdminController::class, 'deleteArticle'])->name('articles.delete');
    Route::post('/articles/create', [AdminController::class, 'createArticle'])->name('articles.create');

//    Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.home');
    Route::get('/categories/delete/{id}', [CategoryController::class, 'deleteCategories'])->name('categories.delete');
    Route::post('/categories/create', [CategoryController::class, 'createCategories'])->name('categories.create');
});




Route::get('/', function () {
    return view('home');
});

Route::view('/about', 'about');
Route::view('/products', 'products');
Route::view('/news', 'news');
Route::view('/social-impacts', 'services/social-impacts');
Route::view('/ukraine-bridge-facility', 'services/ukraine-bridge-facility');
Route::view('/careers', 'services/careers');
Route::view('/ge-office', 'services/georgia-office');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
