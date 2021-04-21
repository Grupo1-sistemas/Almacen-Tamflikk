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

//Route::get('/almacen', 'App\Http\Controllers\ProductosController@index');
//Route::get('/almacen/crear', 'App\Http\Controllers\ProductosController@create');

Route::resource('almacen', 'App\Http\Controllers\ProductosController');
