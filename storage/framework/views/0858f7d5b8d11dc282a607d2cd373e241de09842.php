<div class="form-group-row">
  <div class="col md-6 text-center">
    <label class="form-control-label" for="nombre">Proveedor</label>
  <p><a href="<?php echo e(route('proveedores.show', $pedido->proveedor)); ?>"><?php echo e($pedido->proveedor->nombre); ?></a></p>
  </div>
  <div class="col md-6 text-center">
    <label class="form-control-label" for="num_compra">Numero Compra</label>
    <p><?php echo e($pedido->id); ?></p>
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
      <th>SubTotal(LPS)</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th colspan="3">
      <p align="right" >TOTAL IMPUESTO(<?php echo e($pedido->impuesto); ?>): </p>
      </th>
      <th >
      <p align="right" >s/<?php echo e(number_format($subtotal*$pedido->impuesto/100,2)); ?></p>
      </th>
    </tr>
    <tr >
      <th colspan="3">
      <p align="right" >TOTAL: </p>
      </th>
      <th >
      <p align="right" >s/<?php echo e(number_format($pedido->total,2)); ?></p>
      </th>
    </tr>
  </tfoot>
  <tbody>
    <?php $__currentLoopData = $pedidoDetalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($detalle->id_producto); ?></td>
      <td><?php echo e($detalle->precio); ?></td>
      <td><?php echo e($detalle->cantidad); ?></td>
      <td>s/<?php echo e(number_format($detalle->cantidad*$detalle->precio,2)); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/pedidos/show_fields.blade.php ENDPATH**/ ?>