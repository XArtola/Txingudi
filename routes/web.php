<?php

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

Route::get('/', 'ShopController@listShops')->name('landing');
Route::get('/#contactFormTitle', 'ShopController@contactForm');

/*
TIENDAS
---------------------------------------------------------------------
*/

Route::get('tienda', 'ShopController@index');
Route::get('tienda/{id}', 'ShopController@show')->name('tienda');

/*
PRODUCTOS
---------------------------------------------------------------------
*/

Route::get('producto/{idProducto}', 'ProductController@show');
Route::get('producto/create/{idTienda}', 'ProductController@form');
Route::post('/producto', 'ProductController@store');
Route::put('producto/{idProducto}', 'ProductController@update');
Route::delete('producto/{idProducto}', 'ProductController@destroy');
