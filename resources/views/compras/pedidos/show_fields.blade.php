<div class="form-group-row">
  <div class="col md-6 text-center">
    <label class="form-control-label" for="nombre">Proveedor</label>
    <p>{{$pedidos->id_proveedor}}</p>
  </div>
  <div class="col md-6 text-center">
    <label class="form-control-label" for="num_compra">Numero Compra</label>
    <p>{{$pedidos->id}}</p>
  </div>
</div>
<br/><br/>


<div class="form-group row">
<h4 class="card-title ml-3">Detalles de Compra</h4>
<div class="table-responsive col-md-12">
<table id="detalles" class="table table-borderless">
  <thead>
    <tr>
      <th>Producto</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>SubTotal(PEN)</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th colspan="3">
      <p align="right" >TOTAL IMPUESTO({{$pedidos->impuesto}}): </p>
      </th>
      <th >
      <p align="right" >s/{{number_format($subtotal*$pedidos->impuesto/100,2)}}</p>
      </th>
    </tr>
    <tr >
      <th colspan="3">
      <p align="right" >TOTAL: </p>
      </th>
      <th >
      <p align="right" >s/{{number_format($pedidos->total,2)}}</p>
      </th>
    </tr>
  </tfoot>
  <tbody>
    @foreach($pedidoDetalles as $detalle)
    <tr>
      <td>{{$detalle->id_producto}}</td>
      <td>{{$detalle->precio}}</td>
      <td>{{$detalle->cantidad}}</td>
      <td>s/{{number_format($detalle->cantidad*$detalle->precio,2)}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
