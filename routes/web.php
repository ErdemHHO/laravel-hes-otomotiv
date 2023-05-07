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

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SeriController;
use App\Http\Controllers\Backend\CarController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\ProductController;


Route::get('/', function () {
    return "Selam";
});

Route::resource("/users" ,UserController::class);
Route::get("/users/{user}/change-password" ,[UserController::class , 'passwordForm']);
Route::post("/users/{user}/change-password" ,[UserController::class , 'changePassword']);

Route::resource("/categories", CategoryController::class);

Route::get('/series', [\App\Http\Controllers\Backend\SeriController::class, 'index'])->name('series.index');
Route::get('/series/create', [\App\Http\Controllers\Backend\SeriController::class, 'create'])->name('series.create');
Route::post('/series', [\App\Http\Controllers\Backend\SeriController::class, 'store'])->name('series.store');
Route::get('/series/{seri}', [\App\Http\Controllers\Backend\SeriController::class, 'show'])->name('series.show');
Route::get('/series/{seri}/edit', [\App\Http\Controllers\Backend\SeriController::class, 'edit'])->name('series.edit');
Route::put('/series/{seri}', [\App\Http\Controllers\Backend\SeriController::class, 'update'])->name('series.update');
Route::delete('/series/{seri}', [\App\Http\Controllers\Backend\SeriController::class, 'destroy'])->name('series.destroy');


Route::resource("/cars", CarController::class);

Route::resource("/brands", BrandController::class);

Route::resource("/products", ProductController::class);