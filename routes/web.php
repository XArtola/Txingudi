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
/*
Route::get('/', function () {

    return view('pages.productForm');
});
*/

Route::get('/', 'ShopController@listShops');


//Cuando el se pulsa el a llama a lista y se activa la ruta
Route::get('lista', 'UserController@show');

//Cuando el se pulsa el a llama a lista y se activa la ruta
Route::get('lista/{nombre}', 'UserController@show2');

Route::get('lista', 'UserController@show');

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
Route::post('/producto', 'ProductController@store');
Route::put('producto/{idProducto}', 'ProductController@update');
Route::delete('producto/{idProducto}', 'ProductController@destroy');
