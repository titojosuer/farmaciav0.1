<div class="row wrap">
  <div class="col-sm-6">
    <div class="form-group">
      <label for="cliente_id">Cliente</label>
      <select class="form-control" name="cliente_id" id="cliente_id">
        @foreach ($clientes as $cliente)
        <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
        @endforeach
      </select>
    </div>
  </div>
<div class="col-sm-3">
  <div class="form-group">
    <label for="producto_id">Producto</label>
    <select class="form-control" name="producto_id" id="producto_id">
      @foreach ($productos as $producto)
      <option value="{{$producto->id}}_{{$producto->precio}}_{{$producto->stock}}">{{$producto->nombre}}</option>
      @endforeach
    </select>
  </div>
</div>
<div class="col-sm-3">
    <div class="form-group">
  <label for="fecha">Fecha</label>
  <input class="form-control" type="date" id="fecha" name="fecha" placeholder="Fecha">
</div>
</div>
</div>

<div class="row wrap">
<div class="col-sm-6">
    <div class="form-group">
    <label for="stock">Stock Actual</label>
    <input class="form-control" type="text" id="stock" name="" placeholder="Stock actual" disabled>
</div>
</div>
<div class="col-sm-6">
    <div class="form-group">
  <label for="descuento">Descuento</label>
  <input class="form-control" type="number" id="descuento" name="descuento" placeholder="descuento">
</div>
</div>
</div>

<div class="row wrap">
<div class="col-sm-6">
    <div class="form-group">
    <label for="cantidad">Cantidad</label>
    <input class="form-control" type="number" id="cantidad" name="cantidad" placeholder="Cantidad">
</div>
</div>
<div class="col-sm-3">
    <div class="form-group">
  <label for="precio_venta">Precio Venta</label>
  <input class="form-control" type="number" id="precio" name="precio" placeholder="Precio Venta" disabled>
</div>
</div>
<div class="col-sm-3">
    <div class="form-group">
  <label for="impuesto">Impuesto</label>
  <input class="form-control" type="number" id="impuesto" name ="impuesto" placeholder="15%">
</div>
</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="button" id="agregar" class="btn btn-primary float-right">Agregar Producto</button>
</div>

<div class="form-group">
<h4 class="card-title">Detalles de Venta</h4>
<div class="table-responsive col-md-12">
<table id="detalles" class="table table-borderless">
  <thead>
    <tr>
      <th>Eliminar</th>
      <th>Producto</th>
      <th>Precio de Venta</th>
      <th>Descuento</th>
      <th>Cantidad</th>
      <th>SubTotal(LPS)</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th colspan="4">
      <p align="right" >TOTAL: </p>
      </th>
      <th >
      <p align="right" ><span id="total">LPS 0.00</span></p>
      </th>
    </tr>
    <tr >
      <th colspan="4">
      <p align="right" >TOTAL IMPUESTO (15%): </p>
      </th>
      <th >
      <p align="right" ><span id="total_impuesto">LPS 0.00</span></p>
      </th>
    </tr>
    <tr>
      <th colspan="4">
      <p align="right" >TOTAL A PAGAR: </p>
      </th>
      <th >
      <p align="right" ><span align="right" id="total_pagar_html">LPS 0.00</span>
      <input type="hidden" name="total" id="total_pagar"></p>
      </th>
    </tr>
  </tfoot>
  <tbody>
  </tbody>
</table>
</div>
</div>
