<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::resource('employees', EmployeeController::class);
Route::get('profile', ProfileController::class)->name('profile');
Route::post('employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
