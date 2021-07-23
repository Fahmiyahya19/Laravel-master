<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

Route::get('/',[HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [HomeController::class, 'home'])->name('home');
    Route::get('cart', [CartController::class, 'cart'])->name('cart');
    Route::get('cartform', [CartController::class, 'cartform'])->name('cartform');
    Route::post('cartform', [CartController::class, 'cartdata']);
    Route::get('cartedit/{id}', [CartController::class, 'edit']);
    Route::post('cartedit/{id}', [CartController::class, 'update'])->name('edit');
    Route::get('cartdelete/{id}', [CartController::class, 'destroy'])->name('cartdelete');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});
