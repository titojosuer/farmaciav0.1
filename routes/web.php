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


Route::group(['middleware' => 'auth'],function() {
  
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  Route::resource('clientes', App\Http\Controllers\clientesController::class);

  Route::resource('productos', App\Http\Controllers\productosController::class);

  Route::resource('ventas', App\Http\Controllers\VentaController::class);

  Route::resource('proveedores', App\Http\Controllers\proveedoresController::class);

  Route::resource('categorias', App\Http\Controllers\CategoriaController::class);

  Route::resource('tipoUsuarios', App\Http\Controllers\tipo_usuariosController::class);

  Route::resource('regimenTributario', App\Http\Controllers\RegimenTributarioController::class)->names('regimenTributario');

  Route::resource('facturas', App\Http\Controllers\facturasController::class);

  Route::resource('pedidos',App\Http\Controllers\PedidoController::class );

  Route::resource('permissions',App\Http\Controllers\PermissionController::class );

  Route::resource('roles',App\Http\Controllers\RoleController::class );

  Route::resource('users',App\Http\Controllers\UserController::class );

  Route::resource('laboratorios',App\Http\Controllers\LaboratorioController::class );

  Route::resource('empresas',App\Http\Controllers\EmpresaController::class)->only(['index','update']);

  Route::resource('impresora', App\Http\Controllers\ImpresoraController::class)->only(['index','update']);


  Route::get('delete/productos/{id}', 'App\Http\Controllers\productosController@delete')->name('productos.delete');
  Route::get('cambiar_estado/productos/{producto}','App\Http\Controllers\productosController@cambiar_estado')->name('cambiar.estado.producto');
  Route::get('cambiar_estado/pedidos/{pedido}','App\Http\Controllers\PedidoController@cambiar_estado')->name('cambiar.estado.pedido');
  Route::get('cambiar_estado/ventas/{venta}','App\Http\Controllers\VentaController@cambiar_estado')->name('cambiar.estado.venta');

  Route::get('print/ventas/{venta}', 'App\Http\Controllers\VentaController@print')->name('print.venta');
  Route::get('get_productos_by_barcode','App\Http\Controllers\productosController@get_productos_by_barcode')->name('get_productos_by_barcode');

  Route::get('get_productos_by_id','App\Http\Controllers\productosController@get_productos_by_id')->name('get_productos_by_id');

});
