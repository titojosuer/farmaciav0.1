<div class="form-group-row">
  <div class="col md-6 text-center">
    <label class="form-control-label" for="nombre">Cliente</label>
    <p><a href="{{route('clientes.show', $venta->cliente)}}">{{$venta->cliente->nombre}}</a></p>
  </div>
  <div class="col md-6 text-center">
    <label class="form-control-label" for="num_compra">Numero Venta</label>
    <p>{{$venta->id}}</p>
  </div>
</div>
<br/><br/>


<div class="form-group row">
<h4 class="card-title ml-3">Detalles de Venta</h4>
<div class="table-responsive col-md-12">
<table id="detalles" class="table table-borderless">
  <thead>
    <tr>
      <th>Producto</th>
      <th>Precio Venta(LPS)</th>
      <th>Descuento(LPS)</th>
      <th>Cantidad</th>
      <th>SubTotal(LPS)</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th colspan="4">
      <p align="right" >SUBTOTAL: </p>
      </th>
      <th >
      <p align="right" >s/{{number_format($subtotal,2)}}</p>
      </th>
    </tr>
    <tr>
      <th colspan="4">
      <p align="right" >TOTAL IMPUESTO({{$venta->impuesto}}%): </p>
      </th>
      <th >
      <p align="right" >s/{{number_format($subtotal*$venta->impuesto/100,2)}}</p>
      </th>
    </tr>
    <tr >
      <th colspan="4">
      <p align="right" >TOTAL: </p>
      </th>
      <th >
      <p align="right" >s/{{number_format($venta->total,2)}}</p>
      </th>
    </tr>
  </tfoot>
  <tbody>
    @foreach($ventaDetalles as $detalle)
    <tr>
      <td>{{$detalle->producto_id}}</td>
      <td>{{$detalle->precio}}</td>
      <td>{{$detalle->descuento}}%</td>
      <td>{{$detalle->cantidad}}</td>
      <td>s/{{number_format($detalle->cantidad*$detalle->precio-
        $detalle->cantidad*$detalle->precio*$detalle->descuento/100,2)}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
