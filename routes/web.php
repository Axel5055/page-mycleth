<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NotFoundController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PlanesController;


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

Route::get('/', [InicioController::class, 'index']);
Route::get('404', [NotFoundController::class, 'index']);
Route::get('nosotros', [NosotrosController::class, 'index']);
Route::get('servicios', [ServiciosController::class, 'index']);
Route::get('contacto', [ContactoController::class, 'index']);
Route::get('planes', [PlanesController::class, 'index']);
