<?php
//  PHP ARTISAN MAKE:AUTH DESCARGA ELEMNTOS NECESARIOS PARA REGISTRARNOS COMO USUARIO O LOGEARNOS.
// php artisan make:controller NombreController se crea una nueva clase de controller
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

Route::get('/info', 'PaginaController@info');
Route::get('/bienvenida/{nombre}/{apellido?}', 'PaginaController@bienvenida');
Route::get('/contacto', 'PaginaController@contacto');
Route::get('/desarrolladores', 'PaginaController@equipo')->name('equipo');
Auth::routes();
Route::get('/documentos','DocumentoController@index')->name('documento.index');
Route::get('/clientes','ClienteController@index')->name('cliente.index');
Route::get('/licores','LicorController@index')->name('licor.index');
Route::get('/reporteventa','ReporteVentaController@index')->name('reporteventa.index');
/*
Route::get('/info', function() {//nombre es una variable
    //return "Hola. Información del sistema";
    return view('paginas/info');//al usar view se entiende que estamos en la carpeta de resource y no necesitamos las extenciones
});


Route::get('/bienvenida/{nombre}/{apellido?}', function($nombre, $apellido = null) {//nombre es una variable, también puede ser /{nombre}/bienvenida
    //return $nombre . ' ' . $apellido; colocamos ? después de la variable para que sea opcional
    return view('paginas/bienvenida')->with([
                                            'nombre' => $nombre,
                                            'apellido' => $apellido
                                            ]);
                                            
    return view('paginas.bienvenida', compact('nombre', 'apellido'))->
    with([
        'nombre_completo' => $nombre . ' ' . $apellido
    ]);//se puede utilizar compact y with al mismo tiempo 

});

Route::get('/contacto', function() {
    return view('paginas/contacto');
});
*/

//Se genera dos lienas de código al ejecutar el comando php artisan make:auth


Route::get('/home', 'HomeController@index')->name('home');
?>


