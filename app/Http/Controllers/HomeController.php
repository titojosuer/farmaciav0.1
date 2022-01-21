<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // pedidos por mes
        // $comprasmes = DB::table('pedidos')
        // ->select(DB::raw('pedidos.fecha as mes, sum(pedidos.total) as totalmes'))
        // ->where('pedidos.estado', "EN STOCK")
        // ->groupby('pedidos.fecha')
        // ->orderby ('pedidos.fecha','desc')
        // ->take(12)
        // ->get();

        // // ventas por mes
        // $ventasmes = DB::table('ventas')
        // ->select(DB::raw('ventas.fecha as mes, sum(ventas.total) as totalmes'))
        // ->where('ventas.estado', 'VALIDA')
        // ->groupby('ventas.fecha')
        // ->orderby ('ventas.fecha','desc')
        // ->take(12)
        // ->get();

        $comprasmes = DB::select("SELECT c.fecha as mes, sum(c.total) as totalmes from pedidos c
        where c.estado='EN STOCK'
        group by c.fecha
        order by c.fecha desc limit 12");

         $ventasmes = DB::select("SELECT c.fecha as mes, sum(c.total) as totalmes from ventas c
         where c.estado='VALIDA'
         group by c.fecha
         order by c.fecha desc limit 12");
       
       // ventas por dia

        // $ventasdia =  DB::table('ventas')
        // ->select(DB::raw("to_char(ventas.fecha,'DD-MM-YYYY') as dia, sum(ventas.total) as totaldia"))
        // ->where('ventas.estado', 'VALIDA')
        // ->groupby('ventas.fecha')
        // ->orderby ('ventas.fecha','desc')
        // ->take(15)
        // ->get();
 
        $ventasdia = DB::select('SELECT DATE_FORMAT(c.fecha,"%d/%m/%Y") as dia, sum(c.total) as totaldia from ventas c
        where c.estado="VALIDA"
        group by c.fecha
        order by day(c.fecha) desc limit 15');
 
        //ventas totales por

        $totales = DB::select("SELECT (select NULLIF(sum(p.total),0) from pedidos p where DATE(p.fecha)<CURRENT_DATE and p.estado='EN STOCK') as totalcompra,
        (select NULLIF(sum(v.total),0) from ventas v where DATE(v.fecha)<CURRENT_DATE and v.estado='VALIDA') as totalventa");


        $productosvendidos=DB::select("SELECT p.codigo as codigo, sum(dv.cantidad) as cantidad, p.nombre as nombre, p.id as id,p.stock as stock
        from productos p
        inner join venta_detalles dv on p.id=dv.producto_id
        inner join ventas v on dv.venta_id= v.id
        where v.estado='VALIDA'
        and EXTRACT(YEAR FROM v.fecha)=EXTRACT(YEAR FROM CURRENT_DATE)
        group by p.codigo,p.nombre,p.id,p.stock order by sum(dv.cantidad) desc limit 15
        ");

        return view('home',compact(
          'comprasmes',
          'ventasmes',
          'ventasdia',
          'totales',
          'productosvendidos'
          )
      );
    }
}
