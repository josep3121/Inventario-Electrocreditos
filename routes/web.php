<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Ventas;
use App\Http\Controllers\pago;
use App\Http\Controllers\ganancias;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
//listar clientes
Route::get('clientes/visualizar',[Clientes::class, 'index'])->name('listadoClientes');
//////////////////Registrar Clientes//////////////
Route::get('registrar', [Clientes::class, 'formularioReg'])->name('registroCli');
Route::post('registrar', [Clientes::class, 'registrar'])->name('registrado');

//////Buscar clientes////
Route::post('buscar', [Clientes::class, 'buscarcli'])->name('registrador');
//Listado Productos
Route::get('productos',[Productos::class, 'index'])->name('listadoProductos');

////Registro Producto///////
Route::get('productos/registro', [Productos::class, 'formularioReg'])->name('registroPro');
Route::post('productos/registro', [Productos::class, 'registrar'])->name('registrado');

//Registrar Ventas
Route::get('ventas/registro', [Ventas::class, 'registroVentas'])->name('registroVen');
Route::post('ventas/registro', [Ventas::class, 'registrar'])->name('registro');
//Listado Ventas
Route::get('ventas/visualizar',[Ventas::class, 'index'])->name('listadoVentas');
//Formulario Pagos
Route::get('pagar/{cedula}', [Clientes::class, 'formularioPago'])->name('registropago');
Route::post('pagar', [Clientes::class, 'registrar1'])->name('registrar1');
//Listar Pagos
Route::get('Visualizar_pagos',[pago::class, 'listar'])->name('listadoPagos');
//Listar Ganancias
Route::get('Ganancias/visualizar_ganancias',[ganancias::class, 'listarG'])->name('listadoGanancias');
//Route::get('Ganancias/ganancia_mes',[ganancias::class, 'gana_mes'])->name('listadoGanancias');
//////Buscar fechas////
Route::post('buscarF', [ganancias::class, 'gana_mes'])->name('establecer');