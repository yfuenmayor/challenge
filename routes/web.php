<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperacionesController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Home
Route::get('/', Home::class)->name('home');

//Login
Route::post('login', [LoginController::class, 'tarjeta'])->name('login');
Route::post('validacionpin', [LoginController::class, 'validacionpin'])->name('validacionpin');
Route::get('pin/{id}', [LoginController::class, 'pin'])->name('pin');
Route::get('operaciones/{id}', [OperacionesController::class, 'index'])->name('operaciones');
Route::get('retiro/{id}', [OperacionesController::class, 'retiro'])->name('retiro');
Route::get('balance/{id}', [OperacionesController::class, 'balance'])->name('balance');
Route::post('transaccion', [OperacionesController::class, 'setRetiro'])->name('retirar');
Route::get('bloqueo/{id}', [OperacionesController::class, 'bloqueo'])->name('bloqueo');
Route::get('reporte/{id}', [OperacionesController::class, 'reporte'])->name('reporte');

