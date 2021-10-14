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

Route::get('carros', function () {
    return view('plantilla.index');
});

//Carrito
Route::get('carrito', 'Carrito@index')->name('carrito.shop');

Route::resource('vehiculos', 'VentaVehiculos')->middleware('miautenticacion');

Route::get('login' , 'LoginController@form')->name('login.form');

Route::post('login' , 'LoginController@login')->name('login.verify');

Route::get('logout', 'LoginController@logout')->name('logout');


Route::resource('usuarios', 'UserController');

//Route::resource('datos', 'DPersonalesController');
Route::resource('datos', 'DatosController');

Route::get('comprador' , 'Comprador@vendedor');

Route::get('pdf' , 'PDFController@pdf');
