<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactosController;

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

Route::get('/directorio', [contactosController::class, 'index'])->name('directorio.inicio');

Route::get('/directorio/buscar', [contactosController::class, 'buscar'])->name('directorio.buscar');

Route::get('/directorio/ver/{codigoentrada}', [contactosController::class, 'ver'])->name('directorio.ver');

Route::get('/directorio/eliminar/{id}', [contactosController::class, 'eliminar'])->name('directorio.eliminar');

Route::get('/directorio/destroy/{id}', [contactosController::class, 'destroy'])->name('directorio.destroy');

Route::get('/directorio/agregar', [contactosController::class, 'agregar'])->name('directorio.agregar');

Route::post('/directorio/guardar', [contactosController::class, 'store'])->name('directorio.store');