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

Route::get('/', function () {
    return view('welcome');
});

//Cuando el se pulsa el a llama a lista y se activa la ruta
Route::get('lista', 'UserController@show');

//Cuando el se pulsa el a llama a lista y se activa la ruta
Route::get('lista/{nombre}', 'UserController@show2');


/*
TIENDAS
---------------------------------------------------------------------
*/

Route::get('lista', 'UserController@show');



/*
PRODUCTOS
---------------------------------------------------------------------
*/
Route::get('producto/{idProducto}', 'ProductController@show');
/*
Route::get('/producto/{idProducto}', 'ProductController@destroy');
Route::get('/producto/{idProducto}', 'ProductController@update');
*/
