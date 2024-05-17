<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::resource('products', ProductController::class);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'createPage'])->name('products.create');
Route::post('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.index');

Route::put('/products', [ProductController::class, 'edit'])->name('products.edit');
Route::patch('/products', [ProductController::class, 'update'])->name('products.index');
Route::delete('/products', [ProductController::class, 'destroy'])->name('products.index');
