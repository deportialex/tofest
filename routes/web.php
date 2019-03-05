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



Route::get('/terrazas', 'terrazasController@index')->name('terrazas'); //en el name no acepta terrazas.index


Route::get('/inicio', 'PagesController@inicio')->name('inicio');

//Route::get('/terrazas', 'PagesController@terrazas')->name('terrazas');

Route::get('/servicios', 'PagesController@servicios')->name('servicios');

Route::get('/dudas', 'PagesController@dudas')->name('dudas');

Route::get('/informacion', 'PagesController@informacion')->name('informacion');

Route::get('/carrito', 'PagesController@carrito')->name('carrito');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
