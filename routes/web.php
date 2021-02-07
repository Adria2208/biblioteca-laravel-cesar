<?php

//use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

use App\Models\Autor;
use App\Models\Libro;

use App\Http\Controllers\Api\LibroController;
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
    return view('inicio')->with('nombre', $nombre);
})->name('inicio');

// Route::get('fecha', function () {
//     return date("d/m/y h:i:s");
// });

// Route::resource('libros', LibroController::class);

// Route::get('relacionPrueba', function () {
//     $autor = Autor::findOrFail(1);
//     $libro = new Libro();
//     $libro->titulo = "Libro de prueba " . rand();
//     $libro->editorial = "Editorial de prueba";
//     $libro->precio = 5;
//     $libro->autor()->associate($autor);
//     $libro->save();
//     return redirect()->route('libros.index');
// });

// // Route::resource('login', App\Http\Controllers\LoginController::class);
// Route::get('login', [App\Http\Controllers\LoginController::class, 'loginForm'])->name('login');
// Route::post('login', [App\Http\Controllers\LoginController::class, 'login']);

Route::apiResource('libros', LibroController::class);
