<div class="row wrap">
  <div class="col-sm-6">
    <div class="form-group">
      <label for="cliente_id">Cliente</label>
      <select class="js-example-basic-single form-control" name="cliente_id" id="cliente_id">
        <option value="">---Seleccione un Cliente---</option>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($cliente->id); ?>"><?php echo e($cliente->nombre); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
  </div>

  <div class="form-group col-sm-3">
    <label for="codigo">Codigo de barras</label>
    <input type="text"  class="form-control" name="codigo" id="codigo"  aria-describedby="helpId">
  </div>

<div class="col-sm-3">
  <div class="form-group">
    <label for="producto_id">Producto</label>
    <select class="js-example-basic-single form-control" name="producto_id" id="producto_id">
      <option value=0>----Seleccione un Producto---</option>
      <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($producto->id); ?>_<?php echo e($producto->precio); ?>_<?php echo e($producto->stock); ?>_<?php echo e($producto->impuesto); ?>_<?php echo e($producto->descuento); ?>"><?php echo e($producto->nombre); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </div>
</div>

<div class="col-sm-3">
<?php echo Form::date('fecha',
    old('fecha',
        Carbon\Carbon::today()->format('Y-m-d')),
    ['class'=>'form-control date-picker']); ?>

</div>
<!-- <div class="col-sm-3">
    <div class="form-group">
  <label for="fecha">Fecha</label>
  <input class="form-control" type="date" id="fecha" name="fecha" placeholder="Fecha">
</div>
</div> -->

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
<label for="precio_venta">Precio Venta</label>
<input class="form-control" type="number" id="precio" name="precio" placeholder="Precio Venta" disabled>
</div>

</div>

<div class="col-sm-6">
  <div class="form-group">
<label for="producto_descuento">Descuento</label>
<input class="form-control" type="number" id="producto_descuento" name="producto_descuento" placeholder="Descuento" disabled>
</div>

</div>

<div class="col-sm-6">
  <div class="form-group">
<label for="impuesto">Impuesto</label>
<input class="form-control" type="number" id="impuesto" name="impuesto" placeholder="Impuesto" disabled>
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
    <label for="descuento">Descuento</label>
    <select class="form-control" name="descuento" id="descuento">
      <option value=0>Seleccione un tipo de descuento</option>
      <option value=10>35% - Tercera Edad</option>
      
    </select>
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

<?php $__env->startPush('scripts'); ?>
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
<?php $__env->stopPush(); ?><?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/ventas/fields.blade.php ENDPATH**/ ?>