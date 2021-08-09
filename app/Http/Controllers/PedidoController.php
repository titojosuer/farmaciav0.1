<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\PedidoFormRequest;
use App\Http\Models\Pedido;
use App\Http\Models\DetallePedido;
use DB;
use Carbon\Carbon;
use Response;

class PedidoController extends Controller
{
  public function index(Request $request)
  {
    if($request)
    {
    $query=trim($request->get('searchText'));
    $pedido=DB::table('pedidos as p')
    ->join('proveedores as pr', 'p.id_proveedor','=','pr.id')
    ->join('detalle_pedido as de','p.id_pedido','=','de.id_pedido')
    ->select('p.id_pedido','p.fecha_hora','pr.nombre','p.tipo_comprobante','p.num_comprobante','p.estado','p.impuesto',DB::raw('sum(de.cantidad*de.precio_compra) as total'))
    ->where('p.num_comprobante','LIKE','%'.$query.'%')
    ->orderBy('p.id_pedido','desc')
    ->groupBy('p.id_pedido','p.fecha_hora','pr.nombre','p.tipo_comprobante','p.num_comprobante','p.estado','p.impuesto')
    ->paginate(7);
    return view('compras.pedidos.index',["pedidos"=>$pedido,"searchText"=>$query]);
    }
  }

  public function create()
  {
    $proveedores=DB::table('proveedores')->get();
    $productos = DB::table('productos as prod')
    ->select('prod.nombre','prod.id')
    ->where('prod.estado','=','1')
    ->get();

      return view('compras.pedidos.create',["proveedores"=>$proveedores  ,"productos"=>$productos]);
  }

  public function store(PedidoFormRequest $request)
  {
    try {
      DB::beginTransaction();

      $pedido= new Pedido;
      $pedido->id_proveedor=$request->get('id_proveedor');
      $pedido->tipo_comprobante=$request->get('tipo_comprobante');
      $pedido->num_comprobante=$request->get('num_comprobante');
      $pedido->serie_comprobante=$request->get('serie_comprobante');
      $fecha->Carbon::now('America/Tegucigalpa');
      $pedido->fecha_hora=$fecha->toDateTimeString();
      $pedido->impuesto='18';
      $pedido->estado='1';
      $pedido->save();

      $idproducto=$request->get('id_articulo');
      $cantidad=$request->get('cantidad');
      $precio_compra=$request->get('precio_compra');
      $precio_venta=$request->get('precio_venta');

      $cont=0;

      while($cont < count($idproducto)){
          $detalle=new DetallePedido();
          $detalle->idpedido=$pedido->idpedido;
          $detalle->idproducto=$idproducto[$cont];
          $detalle->cantidad=$cantidad[$cont];
          $detalle->precio_compra=$precio_compra[$cont];
          $detalle->precio_venta=$precio_venta[$cont];
          $detalle->save();
          $cont=$cont+1;

      }

      DB::commit();
    } catch (\Exception $e) {
      DB::rollback();
    }

    return Redirect::to('compras/pedidos');
  }

  public function show($id)
  {
   $pedido=DB::table('pedidos as p')
   ->join('proveedores as pr', 'p.id_proveedor','=','pr.id')
   ->join('detalle_pedido as de','p.id_pedido','=','de.id_pedido')
   ->select('p.id_pedido','p.fecha_hora','pr.nombre','p.tipo_comprobante','p.num_comprobante','p.estado','p.impuesto',DB::raw('sum(de.cantidad*de.precio_compra) as total'))
   ->where('p.id_pedido','=',$id)
   ->first();

   $detalle=DB::table('detalle_pedido as de')
   ->join('productos as p','de.id_producto','=', 'p.id')
   ->select('p.nombre', 'de.cantidad','de.precio_venta','de.precio_compra')
   ->where('de.id_pedido','=',$id)->get();
   return view("compras.pedidos.show",["pedido"=>$pedido,"detalle"=>$detalle]);
  }

  public function destroy($id)
  {
  $pedido=Pedido::findorFail($id);
  $pedido->Estado='0';
  $pedido->update();

  return Redirect::to('compras/pedidos');
  }
}
