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
//    Route::get('/', [AdminController::class, 'index'])->name('admin');

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

//    Products
    Route::get('/productsAdmin', [ProductsController::class, 'index'])->name('products.home');
    Route::get('/products/delete/{id}', [ProductsController::class, 'deleteProducts'])->name('products.delete');
    Route::post('/products/create', [ProductsController::class, 'createProducts'])->name('products.create');

//    Portfolio
    Route::get('/portfolioAdmin', [PortfolioController::class, 'index'])->name('portfolio.home');
    Route::get('/portfolio/delete/{id}', [PortfolioController::class, 'deletePortfolio'])->name('portfolio.delete');
    Route::post('/portfolio/create', [PortfolioController::class, 'createPortfolio'])->name('portfolio.create');
//    News
    Route::get('/newsAdmin', [NewsController::class, 'index'])->name('news.home');
    Route::get('/news/delete/{id}', [NewsController::class, 'deleteNews'])->name('news.delete');
    Route::post('/news/create', [NewsController::class, 'createNews'])->name('news.create');

//    Impacts
    Route::get('/impactsAdmin', [ImpactController::class, 'index'])->name('impacts.home');
    Route::get('/impacts/delete/{id}', [ImpactController::class, 'deleteImpacts'])->name('impacts.delete');
    Route::post('/impacts/create', [ImpactController::class, 'createImpacts'])->name('impacts.create');
//    Impacts
    Route::get('/ukraine_bridge_facilityAdmin', [UkraineBridgeFacilityController::class, 'index'])->name('ukraine_bridge_facility.home');
    Route::get('/ukraine_bridge_facility/delete/{id}', [UkraineBridgeFacilityController::class, 'deleteUkraine_bridge_facility'])->name('ukraine_bridge_facility.delete');
    Route::post('/ukraine_bridge_facility/create', [UkraineBridgeFacilityController::class, 'createUkraine_bridge_facility'])->name('ukraine_bridge_facility.create');

});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/about', 'about');
Route::view('/products', 'products');
Route::view('/ukraine-bridge-facility', 'services/ukraine-bridge-facility');
Route::view('/careers', 'services/careers');
Route::view('/ge-office', 'services/georgia-office');


Auth::routes();
Route::get('/news', [AdminController::class, 'news'])->name('news');
Route::get('/blog', [AdminController::class, 'blog'])->name('blog');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/testimonials', [ImpactController::class, 'impact_stories'])->name('social-impacts');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::fallback(function () {
    return view('error');
});
