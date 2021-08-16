<?php

use App\Http\Controllers\CartApiController;
use Illuminate\Http\Request;
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
Route::get('carts',[CartApiController::class, 'api_data']);
Route::get('carts/{id?}',[CartApiController::class, 'api_id_data']);
Route::post('carts',[CartApiController::class, 'api_store']);
