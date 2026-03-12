<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products',[ProductController::class,'index'])->name('products.index');

Route::get('/product-form',[ProductController::class,'create'])->name('products.create');

Route::post('/product/store',[ProductController::class,'store'])->name('products.store');

Route::get('/', function () {
    return view('welcome');
});
