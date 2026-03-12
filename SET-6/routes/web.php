<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/courses',[CourseController::class,'index'])
    ->name('courses.index');

Route::get('/course-form',[CourseController::class,'create'])
    ->name('courses.create');

Route::post('/course/store',[CourseController::class,'store'])
    ->name('courses.store');

Route::get('/course/{id}',[CourseController::class,'show'])
    ->name('courses.show');

Route::get('/courses',[CourseController::class,'index'])
    ->name('courses.index');

Route::get('/', function () {
    return view('welcome');
});
