<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('employees', EmployeeController::class);
