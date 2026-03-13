<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/events',[EventController::class,'index'])->name('events.index');

Route::get('/event-form',[EventController::class,'create'])->name('events.create');

Route::post('/event/store',[EventController::class,'store'])->name('events.store');
Route::get('/event/{id}',[EventController::class,'show'])->name('events.show');

Route::get('/', function () {
    return view('welcome');
});
