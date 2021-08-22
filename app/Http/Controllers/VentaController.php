<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\clientes;
use App\Models\productos;
use Illuminate\Http\Request;
use App\Http\Requests\VentaStoreRequest;
use App\Http\Requests\VentaUpdateRequest;
use DB;

class VentaController extends Controller
{
  public function index()
  {
    $ventas = Venta::paginate(5);
    return view('ventas.index', compact('ventas'));
  }

  public function create()
  {
   $clientes = clientes::get();
   $productos = DB::table('productos as prod')
   ->select('prod.nombre','prod.id','prod.precio','prod.stock')
   ->where('prod.estado','=','1')
   ->get();
    return view('ventas.create',compact('clientes','productos'));
  }

  public function store(VentaStoreRequest $request)
  {

      $venta = Venta::create($request->all());
      foreach ($request->producto_id as $key=>$producto) {
        $results[] = array("producto_id"=>$request->producto_id[$key],
         "cantidad"=>$request->cantidad[$key],
         "precio"=>$request->precio[$key],
       "descuento"=>$request->descuento[$key]);
       }
      $venta->ventaDetalles()->createMany($results);


      return redirect(route('ventas.index'));
  }

  public function show(Venta $venta)
  {
    $subtotal = 0;
    $ventaDetalles = $venta->ventaDetalles;
    foreach ($ventaDetalles as $ventaDetalle) {
      $subtotal +=  $ventaDetalle->cantidad *  $ventaDetalle->precio -
       $ventaDetalle->cantidad *  $ventaDetalle->precio*$ventaDetalle->descuento/100;
    }
    return view('ventas.show',compact('venta','ventaDetalles','subtotal'));
  }

  public function edit(Ventas $ventas)
  {
      $clientes = clientes::get();

      return view('ventas.edit',compact('clientes'));
  }


  public function update(VentaUpdateRequest $request,Pedido $pedidos )
  {

    // $pedido->update($request->all());
    //   return redirect(route('compras.pedidos.index'));
  }

  public function destroy($id)
  {
  // $pedido=Pedido::findorFail($id);
  // $pedido->Estado='0';
  // $pedido->update();

  return Redirect::to('compras/pedidos');
  }
}
