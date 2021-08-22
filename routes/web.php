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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('clientes', App\Http\Controllers\clientesController::class);

Route::resource('productos', App\Http\Controllers\productosController::class);

Route::resource('ventas', App\Http\Controllers\VentaController::class);

Route::resource('proveedores', App\Http\Controllers\proveedoresController::class);

Route::resource('categorias', App\Http\Controllers\CategoriaController::class);

Route::resource('tipoUsuarios', App\Http\Controllers\tipo_usuariosController::class);

Route::resource('facturas', App\Http\Controllers\facturasController::class);

Route::resource('compras/pedidos',App\Http\Controllers\PedidoController::class );
