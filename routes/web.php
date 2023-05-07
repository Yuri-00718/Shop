<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::get('/shop',[ProductController::class,'index'])->name('shop');
Route::get('/shop/add', [ProductController::class, 'create'])->name('add');
Route::post('/shop/store', [ProductController::class, 'store'])->name('store');
Route::get('/shop/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::patch('/shop/update/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/shop/delete/{id}', [ProductController::class, 'destroy'])->name('delete');