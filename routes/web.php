<?php

use App\Http\Controllers\LibroController;
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
    return view('inicio')->with('nombre', $nombre);
})->name('inicio');

Route::get('fecha', function () {
    return date("d/m/y h:i:s");
});

Route::resource('libros', LibroController::class)->only(['index', 'show', 'create', 'edit','destroy']);

