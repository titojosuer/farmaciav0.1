<div class="form-group-row">
  <div class="col md-6 text-center">
    <label class="form-control-label" for="nombre">Cliente</label>
    <p><a href="<?php echo e(route('clientes.show', $venta->cliente)); ?>"><?php echo e($venta->cliente->nombre); ?></a></p>
  </div>
  <div class="col md-6 text-center">
    <label class="form-control-label" for="num_compra">Numero Venta</label>
    <p><?php echo e($venta->id); ?></p>
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
      <p align="right" >s/<?php echo e(number_format($subtotal,2)); ?></p>
      </th>
    </tr>
    <tr>
      <th colspan="4">
      <p align="right" >TOTAL IMPUESTO(<?php echo e($venta->impuesto); ?>%): </p>
      </th>
      <th >
      <p align="right" >s/<?php echo e(number_format($subtotal*$venta->impuesto/100,2)); ?></p>
      </th>
    </tr>
    <tr >
      <th colspan="4">
      <p align="right" >TOTAL: </p>
      </th>
      <th >
      <p align="right" >s/<?php echo e(number_format($venta->total,2)); ?></p>
      </th>
    </tr>
  </tfoot>
  <tbody>
    <?php $__currentLoopData = $ventaDetalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($detalle->producto_id); ?></td>
      <td><?php echo e($detalle->precio); ?></td>
      <td><?php echo e($detalle->descuento); ?>%</td>
      <td><?php echo e($detalle->cantidad); ?></td>
      <td>s/<?php echo e(number_format($detalle->cantidad*$detalle->precio-
        $detalle->cantidad*$detalle->precio*$detalle->descuento/100,2)); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/ventas/show_fields.blade.php ENDPATH**/ ?>