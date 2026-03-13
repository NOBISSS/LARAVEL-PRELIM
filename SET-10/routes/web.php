<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

Route::get('/feedbacks',[FeedbackController::class,'index'])->name('feedbacks.index');

Route::get('/feedback-form',[FeedbackController::class,'create'])->name('feedbacks.create');

Route::post('/feedback/store',[FeedbackController::class,'store'])->name('feedbacks.store');

Route::get('/', function () {
    return view('welcome');
});
