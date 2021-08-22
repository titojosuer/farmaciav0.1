<div class="row wrap">
  <div class="col-sm-6">
    <div class="form-group">
      <label for="id_proveedor">Proveedor</label>
      <select class="form-control" name="id_proveedor" id="id_proveedor">
        @foreach ($proveedores as $proveedor)
        <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
        @endforeach
      </select>
    </div>
  </div>
<div class="col-sm-3">
  <div class="form-group">
    <label for="id_producto">Producto</label>
    <select class="form-control" name="id_producto" id="id_producto">
      @foreach ($productos as $producto)
      <option value="{{$producto->id}}">{{$producto->nombre}}</option>
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
    <label for="cantidad">Cantidad</label>
    <input class="form-control" type="number" id="cantidad" name="cantidad" placeholder="Cantidad">
</div>
</div>
<div class="col-sm-3">
    <div class="form-group">
  <label for="precio_compra">Precio Compra</label>
  <input class="form-control" type="number" id="precio" name="precio" placeholder="Precio Compra">
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
<h4 class="card-title">Detalles de Compra</h4>
<div class="table-responsive col-md-12">
<table id="detalles" class="table table-borderless">
  <thead>
    <tr>
      <th>Eliminar</th>
      <th>Producto</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>SubTotal(PEN)</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th colspan="4">
      <p align="right" >TOTAL: </p>
      </th>
      <th >
      <p align="right" ><span id="total">PEN 0.00</span></p>
      </th>
    </tr>
    <tr id="dvOcultar">
      <th colspan="4">
      <p align="right" >TOTAL IMPUESTO (15%): </p>
      </th>
      <th >
      <p align="right" ><span id="total_impuesto">PEN 0.00</span></p>
      </th>
    </tr>
    <tr>
      <th colspan="4">
      <p align="right" >TOTAL A PAGAR: </p>
      </th>
      <th >
      <p align="right" ><span align="right" id="total_pagar_html">PEN 0.00</span>
      <input type="hidden" name="total" id="total_pagar"></p>
      </th>
    </tr>
  </tfoot>
  <tbody>
  </tbody>
</table>
</div>
</div>
