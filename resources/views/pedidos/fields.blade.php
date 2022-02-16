<div class="row wrap">
  <div class="col-sm-6">
    <div class="form-group">
      <label for="proveedor_id">Proveedor</label>
      <select class="js-example-basic-single form-control" name="proveedor_id" id="proveedor_id">
        <option value="">---Seleccione un Proveedor---</option>
        @foreach ($proveedores as $proveedor)
        <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
        @endforeach
      </select>
    </div>
  </div>
<div class="col-sm-3">
  <div class="form-group">
    <label for="id_producto">Producto</label>
    <select class="js-example-basic-single form-control" name="id_producto" id="id_producto">
      <option value="">---Seleccione un Producto---</option>
      @foreach ($productos as $producto)
      <option value="{{$producto->id}}">{{$producto->nombre}}</option>
      @endforeach
    </select>
  </div>
</div>

<!-- <div class="col-sm-3">
    <div class="form-group">
  <label for="fecha">Fecha</label>
  <input class="form-control" type="date" id="fecha" name="fecha" placeholder="Fecha">
</div>
</div> -->

<div class="col-sm-3" style="margin-top:27px">
{!! Form::date('fecha',
    old('fecha',
        Carbon\Carbon::today()->format('Y-m-d')),
    ['class'=>'form-control date-picker']) !!}
</div>
<div class="col-sm-3">
{!! Form::date('fecha',
    old('fecha',
        Carbon\Carbon::today()->format('Y-m-d')),
    ['class'=>'form-control date-picker']) !!}
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
  <input class="form-control" type="number" id="impuesto" name ="impuesto" placeholder="Impuesto">
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
    <tr id="dvOcultar">
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

@push('scripts')
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endpush
