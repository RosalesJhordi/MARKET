<?php

use App\Http\Controllers\CajasController;
use App\Http\Controllers\EgresosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login.post');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('/');

    Route::get('Productos', [ProductosController::class, 'index'])->name('Productos');
    Route::post('Producto', [ProductosController::class, 'guardarProducto'])->name('Producto');
    Route::post('EditProducto', [ProductosController::class, 'editarProducto'])->name('EditProducto');

    Route::get('Ventas', [VentasController::class, 'index'])->name('Ventas');
    Route::post('Ventas', [VentasController::class, 'addVenta'])->name('AddVenta');

    Route::get('Cajas', [CajasController::class, 'index'])->name('Cajas');
    Route::post('Caja', [CajasController::class, 'editCaja'])->name('EditCaja');

    Route::get('Movimientos', [EgresosController::class, 'index'])->name('Movimientos');
    Route::post('Egresos', [EgresosController::class, 'store'])->name('AddEgreso');
});
