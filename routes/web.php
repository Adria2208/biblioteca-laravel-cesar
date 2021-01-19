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
    $nombre = "Nacho";
    return view('inicio', compact('nombre'));
})->name('inicio');

Route::get('fecha', function () {
    return date("d/m/y h:i:s");
});

Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return "Hola, " . $nombre;
})->where('nombre', "[A-Za-z]+");

Route::get('contacto', function () {
    return "Página de contacto";
})->name('ruta_contacto');

Route::get(
    'saludo/{nombre?}/{id?}',
    function ($nombre = "Invitado", $id = 0) {
        return "Hola $nombre, tu código es el $id";
    }
)->where('nombre', "[A-Za-z]+")
    ->where('id', "[0-9]+")
    ->name('saludo');

Route::get('listado', function () {
    $libros = array(
        array(
            "titulo" => "El juego de Ender",
            "autor" => "Orson Scott Card"
        ),
        array(
            "titulo" => "La tabla de Flandes",
            "autor" => "Arturo Pérez Reverte"
        ),
        array(
            "titulo" => "La historia interminable",
            "autor" => "Michael Ende"
        ),
        array(
            "titulo" => "El Señor de los Anillos",
            "autor" => "J.R.R. Tolkien"
        )
    );
    return view('listado', compact('libros'));
})->name('libros_listado');
