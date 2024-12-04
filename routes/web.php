<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HelloSindhuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\AuthManager;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloWorldController::class, 'index']);
Route::get('/sum/{num1}/{num2}', [CalculatorController::class, 'sum']);
Route::get('/subtract/{num1}/{num2}', [CalculatorController::class, 'subtract']);
Route::get('/multiply/{num1}/{num2}', [CalculatorController::class, 'multiply']);
Route::get('/divide/{num1}/{num2}', [CalculatorController::class, 'divide']);
Route::get('/sindhu', [HelloSindhuController::class, 'sindhu']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [App\Http\Controllers\AuthManager::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\AuthManager::class, 'register'])->name('register');
