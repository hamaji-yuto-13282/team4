<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// AccountController
Route::get('/login', [AccountController::class, 'index']);
Route::post('/login', [AccountController::class, 'login']);

Route::post('/logout', [AccountController::class, 'logout']);

Route::get('/register', [AccountController::class, 'signup']);
Route::post('/register', [AccountController::class, 'createUser']);

// // ShoppingController (仮：ProductController)
// Route::get('/products', [ShoppingController::class], 'products');
// Route::get('/products/search', [ShoppingController::class], 'search');
// Route::get('/products/{id}', [ShoppingController::class], 'detail');
