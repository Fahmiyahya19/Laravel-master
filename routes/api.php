<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartApiController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[AuthController::class, 'loginApi'])->name('api-login');
Route::group(['middleware' => 'auth:api'], function () {
    Route::get('carts',[CartApiController::class, 'cart_data']);
    Route::get('carts/{id}',[CartApiController::class, 'cart_id_data']);
    Route::put('carts/{id}',[CartApiController::class,'cart_update']);
    Route::delete('carts/{id}',[CartApiController::class,'cart_delete']);
    Route::post('carts',[CartApiController::class, 'cart_store']);
});
