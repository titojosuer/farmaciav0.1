<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\clientes;
use App\Models\productos;
use Illuminate\Http\Request;
use App\Http\Requests\VentaStoreRequest;
use App\Http\Requests\VentaUpdateRequest;

use DB;

use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;
use Mike42\Escpos\ECposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;


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
   ->select('prod.nombre','prod.id','prod.precio','prod.stock','prod.impuesto','prod.descuento')
   ->where('prod.estado','=','ACTIVO')
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
    
    // #cliente_id", "fecha", "impuesto", "total",
    //   $venta = new Venta;#::create($request->all());
    //   $venta->cliente_id= $request->cliente_id;
    //   $venta->fecha= $request->fecha;
    //   $venta->estado= 'VALIDA';
    //   $venta->impuesto= $request->impuesto;
    //   $venta->total= $request->total;
    //   $venta->save();
    //   foreach ($request->producto_id as $key=>$producto) {
    //     $results[] = array("producto_id"=>$request->producto_id[$key],
    //      "cantidad"=>$request->cantidad[$key],
    //      "precio"=>$request->precio[$key],
    //    "descuento"=>$request->descuento[$key]);
    //    }
    //   $venta->ventaDetalles()->createMany($results);


    //   return redirect(route('ventas.index'));
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

  return Redirect::to('ventas');
  }

  public function cambiar_estado($id)
  {
    $ventas=Venta::findorFail($id);
    // dd($ventas);
    if($ventas->estado=='VALIDA'){
        $ventas->update(['estado'=>'CANCELADA']);
        return redirect()->back();
    }else{
        $ventas->update(['estado'=>'VALIDA']);
        return redirect()->back();
    }
  }

    public function print(Venta $venta){
    try{
    $printer_name = "SAT23TUSE";
    $connector = new WindowsPrintConnector($printer_name);
    $printer = new Printer($connector);
    $subtotal = 0;
    $ventaDetalles = $venta->ventaDetalles;
    foreach ($ventaDetalles as $ventaDetalle) {
      $subtotal +=  $ventaDetalle->cantidad *  $ventaDetalle->precio -
       $ventaDetalle->cantidad *  $ventaDetalle->precio*$ventaDetalle->descuento/100;
      $printer->text($ventaDetalle);
      
    }
    $printer->text('hola');
    $printer->feed(4);
    $printer->cut();
    $printer->close();

   
//  $items = array(new item("Example item #1", "4.00"), new item("Another thing", "3.50"), new item("Something else", "1.00"), new item("A final item", "4.45"));
//  $subtotal = new item('Subtotal', '12.95');
//  $tax = new item('A local tax', '1.30');
//  $total = new item('Total', '14.25', true);
//  /* Date is kept the same for testing */
//  $date = date('l jS \of F Y h:i:s A');
//  $date = "Monday 6th of April 2015 02:56:25 PM";
//  /* Start the printer */
//  $logo = EscposImage::load("image/logo-final.png", false);
//  $printer = new Printer($connector);
//  /* Print top logo */
//  $printer->setJustification(Printer::JUSTIFY_CENTER);
//  $printer->graphics($logo);
//  /* Name of shop */
//  $printer->selectPrintMode(Printer::MODE_DOUBLE_WIDTH);
//  $printer->text("C'elifFarma.\n");
//  $printer->selectPrintMode();
//  $printer->text("Talanga, Francisco Morazán.\n");
//  $printer->feed();
//  /* Title of receipt */
//  $printer->setEmphasis(true);
//  $printer->text("Factura\n");
//  $printer->setEmphasis(false);
//  /* Items */
//  $printer->setJustification(Printer::JUSTIFY_LEFT);
//  $printer->setEmphasis(true);
//  $printer->text(new item('', 'L'));
//  $printer->setEmphasis(false);
//  foreach ($ventaDetalles as $ventaDetalle) {
//    $subtotal +=  $ventaDetalle->cantidad *  $ventaDetalle->precio -
//     $ventaDetalle->cantidad *  $ventaDetalle->precio*$ventaDetalle->descuento/100;
//    $printer->text($ventaDetalle);
   
//  }
//  $printer->setEmphasis(true);
//  $printer->text($subtotal);
//  $printer->setEmphasis(false);
//  $printer->feed();
//  /* Tax and total */
//  $printer->text($tax);
//  $printer->selectPrintMode(Printer::MODE_DOUBLE_WIDTH);
//  $printer->text($total);
//  $printer->selectPrintMode();
//  /* Footer */
//  $printer->feed(2);
//  $printer->setJustification(Printer::JUSTIFY_CENTER);
//  $printer->text("Gracias por su compra\n");
//   $printer->text("For trading hours, please visit example.com\n");
//  $printer->feed(2);
//  $printer->text($date . "\n");
//  /* Cut the receipt and open the cash drawer */
//  $printer->cut();
//  $printer->pulse();
//  $printer->close();
/* A wrapper to do organise item names & prices into columns */

    return redirect()->back();
  }catch(\Throwable $th){
    echo "Couldn't print to this printer: " . $th -> getMessage() . "\n";
  }
  }
  
}