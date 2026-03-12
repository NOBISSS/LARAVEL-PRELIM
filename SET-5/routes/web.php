<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/blogs',[BlogController::class,'index'])->name('blogs.index');
Route::get('/blog-form',[BlogController::class,'create'])->name('blogs.create');

Route::post('/blog/store',[BlogController::class,'store'])->name('blogs.store');


Route::get('/blog/{id}',[BlogController::class,'show'])->name('blogs.show');

Route::get('/', function () {
    return view('welcome');
});
