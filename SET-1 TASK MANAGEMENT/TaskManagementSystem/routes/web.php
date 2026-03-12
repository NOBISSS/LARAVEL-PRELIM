<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;



Route::get('/tasks',[TaskController::class,'index'])->name('tasks.index');
Route::get('/task-form',[TaskController::class,'create']);

Route::post('/task/store',[TaskController::class,'store']);
Route::get('/task/{id}',[TaskController::class,'taskdet']);
Route::get('/', function () {
    return view('welcome');
});
