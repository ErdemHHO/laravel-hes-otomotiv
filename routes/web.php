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
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SeriController;
use App\Http\Controllers\Backend\CarController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductImageController;
use App\Http\Controllers\Backend\CarImageController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/urunler/{carSlug?}', [HomeController::class, 'cars']);
Route::get('/urunler/{carSlug?}/{categorySlug?}', [HomeController::class, 'categories']);
Route::get('/hakkimizda', function () {
    return view('frontend/home/about');
});
Route::get('/search', [HomeController::class, 'search'])->name('frontend.search');
Route::get('/vizyon', function () {
    return view('frontend/home/vision');
});
Route::get('/iletisim', function () {
    return view('frontend/home/communication');
});
Route::get('/urun-detay/{productSlug?}', [HomeController::class, 'products']);

Route::resource("/users" ,UserController::class);
Route::get("/users/{user}/change-password" ,[UserController::class , 'passwordForm']);
Route::post("/users/{user}/change-password" ,[UserController::class , 'changePassword']);

Route::resource("/categories", CategoryController::class);

Route::get('/series', [\App\Http\Controllers\Backend\SeriController::class, 'index'])->name('series.index');
Route::get('/series/create', [\App\Http\Controllers\Backend\SeriController::class, 'create'])->name('series.create');
Route::post('/series', [\App\Http\Controllers\Backend\SeriController::class, 'store'])->name('series.store');
Route::get('/series/{seri}/edit', [\App\Http\Controllers\Backend\SeriController::class, 'edit'])->name('series.edit');
Route::put('/series/{seri}', [\App\Http\Controllers\Backend\SeriController::class, 'update'])->name('series.update');
Route::delete('/series/{seri}', [\App\Http\Controllers\Backend\SeriController::class, 'destroy'])->name('series.destroy');
Route::get('/series/{seri}', [\App\Http\Controllers\Backend\SeriController::class, 'show'])->name('series.show');

Route::resource("/cars", CarController::class);

Route::resource("/cars/{car}/images", CarImageController::class);

Route::resource("/brands", BrandController::class);

Route::resource("/products", ProductController::class);

Route::resource("/products/{product}/images", ProductImageController::class);


Route::get('/login', function () {
    return view('backend.auth.login');
});