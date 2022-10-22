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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('cuentas', App\Http\Controllers\CuentaController::class)->middleware('auth');

Route::resource('bancos', App\Http\Controllers\BancoController::class)->middleware('auth');

Route::resource('ingresoscuentas', App\Http\Controllers\IngresoscuentaController::class)->middleware('auth');

Route::resource('ingresosbancos', App\Http\Controllers\IngresosbancoController::class)->middleware('auth');

Route::resource('pagos', App\Http\Controllers\PagoController::class)->middleware('auth');
