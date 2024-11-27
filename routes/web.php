<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HelloSindhuController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloWorldController::class, 'index']);
Route::get('/sum/{num1}/{num2}', [HelloWorldController::class, 'sum']);
Route::get('/subtract/{num1}/{num2}', [HelloWorldController::class, 'subtract']);
Route::get('/multiply/{num1}/{num2}', [HelloWorldController::class, 'multiply']);
Route::get('/divide/{um1}/{num2}', [HelloWorldController::class, 'divide']);
Route::get('/helloSindhu', [HelloSindhuController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);