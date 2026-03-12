<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/employees',[EmployeeController::class,'index'])
    ->name('employees.index');

Route::get('/employee-form',[EmployeeController::class,'create'])
    ->name('employees.create');

Route::post('/employee/store',[EmployeeController::class,'store'])
    ->name('employees.store');

Route::get('/employee/{id}',[EmployeeController::class,'show'])
    ->name('employees.show');

Route::get('/', function () {
    return view('welcome');
});
