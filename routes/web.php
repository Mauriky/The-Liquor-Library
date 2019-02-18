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

Route::get('/info', function() {
    //return "Hola. Información del sistema";
    return view('paginas/info');//al usar view se entiende que estamos en la carpeta de resource y no necesitamos las extenciones
});

Route::get('/contacto', function() {
    //return "Hola. Información del sistema";
    return view('paginas/contacto');//al usar view se entiende que estamos en la carpeta de resource y no necesitamos las extenciones
});

