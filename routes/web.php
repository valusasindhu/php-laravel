<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HelloSindhuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\User;
use App\Http\Controllers\Hash;
use App\Http\Controllers\ProductsManager;
use App\Http\Controllers\CategoriesManager;
use App\Http\Controllers\CartManager;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloWorldController::class, 'index']);
Route::get('/sum/{num1}/{num2}', [CalculatorController::class, 'sum']);
Route::get('/subtract/{num1}/{num2}', [CalculatorController::class, 'subtract']);
Route::get('/multiply/{num1}/{num2}', [CalculatorController::class, 'multiply']);
Route::get('/divide/{num1}/{num2}', [CalculatorController::class, 'divide']);
Route::get('/sindhu', [HelloSindhuController::class, 'sindhu']);

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::get('/register', [AuthManager::class, 'register'])->name('register');

Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/home', [AuthManager::class, 'index'])->name('home');
Route::get('login', [AuthManager::class, 'login'])->name('login');
Route::get('logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/products', [ProductsManager::class, 'products'])->name('products');
Route::get('/categories', [CategoriesManager::class, 'categories'])->name('categories');
Route::get('product/{slug}', [ProductsManager::class, 'show'])->name('products.details');
Route::middleware('auth')->group(function () {
    Route::get('/cart/{id}', [ProductsManager::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartManager::class, 'cart'])->name('cart');
});

