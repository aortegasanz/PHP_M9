<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentoController;

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
})->name('inicio');

Route::get('/empresa/{nombre}', [EmpresasController::class, 'index'])->name('empresa');

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');

Route::get('/contacto', [ContactosController::class, 'index'])->name('contacto');

/* PHP_M9 - Exercici 5 */
Route::get('paises', [PaisController::class, 'index']);
Route::post('paises', [PaisController::class, 'store']);

Route::get('paises/{pais}', [PaisController::class, 'show']);
Route::put('paises/{pais}', [PaisController::class, 'update']);
Route::delete('paises/{pais}', [PaisController::class, 'destroy']);

Route::get('paises/{pais}/departamentos', [DepartamentoController::class, 'index']);
Route::put('paises/{pais}/departamentos', [DepartamentoController::class, 'store']);

Route::get('paises/{pais}/departamentos/{departamento}', [DepartamentoController::class, 'show']);
Route::put('paises/{pais}/departamentos/{departamento}', [DepartamentoController::class, 'update']);
Route::delete('paises/{pais}/departamentos/{departamento}', [DepartamentoController::class, 'destroy']);