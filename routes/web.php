<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/   

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/texto', function(){
    return 'esto es un texto de prueba';    
});

Route::get('/nombre/{nombre}', function($nombre){
    return '<h1> El nombre es:' .$nombre.'</h1>';
});


route::get('/resources/views/inicio.blade.php', function(){
    return view('inicio');
});

route::get('/resources/views/productos.blade.php', function(){
    return view('productos');
});

route::get('/resources/views/contacto.blade.php', function(){
    return view('contacto');
});

route::get('/resources/views/perfil.blade.php', function(){
    return view('perfil');
});*/

Route::get('/inicio', 'App\Http\Controllers\InicioController@inicio');

Route::get('/inicio/contacto', 'App\Http\Controllers\InicioController@contacto');

Route::get('/inicio/registro', 'App\Http\Controllers\InicioController@reg');

Route::get('/inicio/productos', 'App\Http\Controllers\ProductoController@index')->name('productos.productos');

Route::get('/inicio/inventario', 'App\Http\Controllers\InicioController@inventario');

Route::get('/inicio/productos/create', 'App\Http\Controllers\ProductoController@create');

Route::post('/inicio/productos/store', 'App\Http\Controllers\ProductoController@store')->name('producto.store');

Route::get('/inicio/adopciones', 'App\Http\Controllers\InicioController@adopciones');
