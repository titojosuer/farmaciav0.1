<div class="table-responsive-sm">
    <table class="table table-striped" id="ventas-table">
      <thead>
        <th>Id</th>
        <th>Fecha</th>
        <th>Total</th>
        <th>Estado</th>
          <th colspan="3">Acciones</th>
      </thead>
             <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($venta->id); ?></td>
        <td><?php echo e($venta->fecha); ?></td>
        <td><?php echo e($venta->total); ?></td>
        <?php if($venta->estado=='VALIDA'): ?>
        <td>
        <a class="btn btn-ghost-success" href="<?php echo e(route('cambiar.estado.venta', $venta)); ?>">
        <?php echo e($venta->estado); ?>

        </a>
        </td>
        <?php else: ?>
        <td>
        <a class= "btn btn-ghost-danger" href="<?php echo e(route('cambiar.estado.venta', $venta)); ?>">
        <?php echo e($venta->estado); ?>

        </a>
        </td>
        <?php endif; ?>
        <td style="width:100px;">
            <?php echo Form::open(['url' => ['ventas.destroy', $venta->id], 'method' => 'delete']); ?>

            <div class='btn-group'>
                <!-- <a href="<?php echo e(url('ventas.id', [$venta->id])); ?>" class='btn btn-ghost-success'><i class="fa fa-file-pdf-o"></i></a> -->
                <a href="<?php echo e(route('ventas.show',[$venta->id])); ?>" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                <a href="<?php echo e(route('print.venta', $venta)); ?>" class='btn btn-ghost-info'><i class="fa fa-print"></i></a>
                <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]); ?>

            </div>
            <?php echo Form::close(); ?>

        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
      <?php echo $ventas->links(); ?>

    </div>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/ventas/table.blade.php ENDPATH**/ ?>