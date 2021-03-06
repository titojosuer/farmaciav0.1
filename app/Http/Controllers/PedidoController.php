<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\PedidosStoreRequest;
use App\Http\Requests\PedidosUpdateRequest;
use App\Models\Pedido;
use App\Models\DetallePedido;
use App\Models\productos;
use App\Models\proveedores;
use DB;
use Carbon\Carbon;
use Response;

class PedidoController extends Controller
{
  public function index()
  {
    $pedidos = Pedido::paginate(5);
    return view('pedidos.index', compact('pedidos'));
  }

  public function create()
  {
    $proveedores = DB::table('proveedores')->get();
    $productos = DB::table('productos as prod')
    ->select('prod.nombre','prod.id')
    ->where('prod.estado','=','ACTIVO')
    ->get();
    return view('pedidos.create',compact('proveedores','productos'));
  }

  public function store(PedidosStoreRequest $request)
  {
      // dd($request);
      $pedido = Pedido::create($request->all());
      foreach ($request->id_producto as $key=>$producto) {
        $results[] = array("id_producto"=>$request->id_producto[$key],
         "cantidad"=>$request->cantidad[$key],
         "precio"=>$request->precio[$key]);
       }
      $pedido->pedidoDetalles()->createMany($results);


    return Redirect::to('pedidos');
  }

  public function show(Pedido $pedido)
  {
    $subtotal=0;
    $pedidoDetalles = $pedido->pedidoDetalles;
    // $nombreProducto = DB::table('productos as prod')
    // ->select('prod.nombre')
    // ->join ('detalle_pedido as d','d.id_producto','=','prod.id')
    // ->where('prod.estado','=','1')
    // ->get();
    foreach ($pedidoDetalles as $pedidoDetalle) {
      $subtotal += $pedidoDetalle->cantidad * $pedidoDetalle->precio;
    }
    return view('pedidos.show',compact('pedido','pedidoDetalles','subtotal'));
  }

  public function edit(Pedido $pedidos)
  {
      $proveedores = Proveedor::get();
      return view('pedidos.edit',compact('pedidos'));
  }


  public function update(UpdateproductosRequest $request,Pedido $pedidos )
  {

    $pedido->update($request->all());
      return redirect(route('pedidos.index'));
  }

  public function destroy($id)
  {
  $pedido=Pedido::findorFail($id);
  $pedido->Estado='0';
  $pedido->update();

  return Redirect::to('pedidos');
  }


    public function cambiar_estado($id)
    {
      $pedidos=Pedido::findorFail($id);
      $pedidos=Pedido::findorFail($id);
      // dd($pedidos);
      if($pedidos->estado=='EN STOCK'){
          $pedidos->update(['estado'=>'CANCELADO']);
          return redirect()->back();
      }else{
          $pedidos->update(['estado'=>'EN STOCK']);
          return redirect()->back();
      }
    }

}
