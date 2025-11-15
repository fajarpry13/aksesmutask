<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', fn () => redirect()->route('products.index')); // ✅ auto redirect ke list produk
Route::resource('products', ProductController::class)->except(['show']);