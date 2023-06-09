<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupllierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;

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
Route::get('/',WelcomeController::class)->name('welcome');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/details/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}',[ProductController::class,'update'])->name('products.update');
Route::delete('products/{id}',[ProductController::class,'destroy'])->name('products.destroy');

Route::get('categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('categories/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('categories',[CategoryController::class,'store'])->name('categories.store');
Route::delete('categories/{id}',[CategoryController::class,'destroy'])->name('categories.destroy');

Route::get('suppliers',[SupllierController::class,'index'])->name('suppliers.index');
Route::get('suppliers/details/{id}',[SupllierController::class,'show'])->name('suppliers.show');
Route::get('suppliers/{id}/edit',[SupllierController::class,'edit'])->name('suppliers.edit');
Route::get('suppliers/create',[SupllierController::class,'create'])->name('suppliers.create');
Route::post('suppliers',[SupllierController::class,'store'])->name('suppliers.store');
Route::delete('suppliers/{id}',[SupllierController::class,'destroy'])->name('suppliers.destroy');
