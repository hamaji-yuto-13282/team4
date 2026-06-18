<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// AccountController
Route::get('/login', [AccountController::class, 'index']);
Route::post('/login', [AccountController::class, 'login']);

Route::post('/logout', [AccountController::class, 'logout']);

// 学習用：RegisterController
Route::get('/register',  [RegisterController::class, 'showRegistrationForm'])
->name(('register'));
Route::post('/register', [RegisterController::class, 'register']);


// // ShoppingController (仮：ProductController)
// Route::get('/products', [ShoppingController::class], 'products');
// Route::get('/products/search', [ShoppingController::class], 'search');
// Route::get('/products/{id}', [ShoppingController::class], 'detail');
