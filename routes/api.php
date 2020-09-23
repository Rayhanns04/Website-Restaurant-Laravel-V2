<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PromositionController;
use App\Http\Controllers\Api\FavoriteController;
use App\Http\Controllers\Api\BreakfastController;
use App\Http\Controllers\Api\CartController;

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


Route::get('/getPromosition', [PromositionController::class, 'index']);
Route::get('/getFavorite', [FavoriteController::class, 'index']);
Route::get('/getBreakfast', [BreakfastController::class, 'index']);
Route::get('/getCart', [CartController::class, 'index']);


