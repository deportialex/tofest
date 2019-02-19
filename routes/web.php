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

Route::get('/info', function () {
  //  return "Informacion de la pagina";
    return view('paginas.informacion');
});

Route::get('/contacto', function () {
  //  return "Informacion de la pagina";
    return view('paginas.contacto');
});
