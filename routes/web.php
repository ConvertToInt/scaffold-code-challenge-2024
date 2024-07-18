<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', [ProductController::class, 'index'])->name('products_index');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product_show');
Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('category_show');
Route::get('/search', [ProductController::class, 'search'])->name('product_search');
