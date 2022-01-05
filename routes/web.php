<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/producto',[ProductosController::class, 'index'])->name('product.index');
Route::get('/producto/{id}',[ProductosController::class, 'show'])->name('product.detail');

Route::get('/ventas',[VentasController::class, 'index'])->name('ventas.index');
Route::get('/ventas/{id}',[VentasController::class, 'show'])->name('ventas.detail');
