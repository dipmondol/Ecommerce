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

// Route::get('/', function () {
//     return view('addItem');
// });


Route::get('/', 'shopController@shopPage');
Route::get('/cart', 'shopController@cart');
Route::get('/add-item', 'shopController@addItemPage');
Route::get('/show-item/{id}', 'shopController@showItemPage');
Route::get('/count-cart-item/{id}', 'shopController@countCartItem');
Route::get('/remove-cart-item/{id}', 'shopController@removeCarItem');
Route::post('/store-item', 'shopController@storeItem');



