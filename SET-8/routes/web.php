<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

Route::resource('library',LibraryController::class);

Route::get('/', function () {
    return view('welcome');
});
