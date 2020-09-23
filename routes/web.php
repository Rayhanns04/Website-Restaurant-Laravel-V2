<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//  to view
Route::get('/home', function () {
    return view('home');
});
Route::get('/breakfast', function(){
    return view('sarapan-pagi');
});
Route::get('/search', function(){
    return view('search');
});
Route::get('/cart', function(){
    return view('cart');
});
Route::get('/admin', function(){
    return view('admin');
});

Route::get('/breakfastMenu', 'PagiControllerAdmin@index');
Route::post('/breakfastMenu/create', 'PagiControllerAdmin@create');
Route::get('/breakfastMenu/{id}/edit', 'PagiControllerAdmin@edit');
Route::post('/breakfastMenu/{id}/update', 'PagiControllerAdmin@update');
Route::get('breakfastMenu/{id}/delete', 'PagiControllerAdmin@delete');


Route::get('/cartItem', 'CartControllerAdmin@index');
Route::post('/cartItem/create', 'CartControllerAdmin@create');
Route::get('/cartItem/{id}/edit', 'CartControllerAdmin@edit');
Route::post('/cartItem/{id}/update', 'CartControllerAdmin@update');
Route::get('/cartItem/{id}/delete', 'CartControllerAdmin@delete');
