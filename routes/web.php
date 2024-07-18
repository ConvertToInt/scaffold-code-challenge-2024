<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/all', [ProductController::class, 'index'])->name('products_index');
Route::get('/products/categories/{category:slug}', [CategoryController::class, 'show'])->name('category_show');
