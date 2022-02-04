<div class="table-responsive-sm">
    <table class="table table-striped" id="pedidos-table">
      <thead>
        <th>Id</th>
        <th>Fecha</th>
        <th>Proveedor</th>
        <th>Impuesto</th>
        <th>Total</th>
        <th>Estado</th>
          <th colspan="3">Action</th>
      </thead>
             <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ped): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($ped->id); ?></td>
        <td><?php echo e($ped->fecha); ?></td>
        <td><?php echo e($ped->proveedor->nombre); ?></td>
        <td><?php echo e($ped->impuesto); ?></td>
        <td><?php echo e($ped->total); ?></td>
        <?php if($ped->estado=='EN STOCK'): ?>
        <td>
        <a class="btn btn-ghost-success" href="<?php echo e(route('cambiar.estado.pedido', $ped)); ?>">
        <?php echo e($ped->estado); ?>

        </a>
        </td>
        <?php else: ?>
        <td>
        <a class= "btn btn-ghost-danger" href="<?php echo e(route('cambiar.estado.pedido', $ped)); ?>">
        <?php echo e($ped->estado); ?>

        </a>
        </td>
        <?php endif; ?>
        <td style="width:100px;">
            <?php echo Form::open(['url' => ['pedidos.destroy', $ped->id], 'method' => 'delete']); ?>

            <div class='btn-group'>
                <a href="<?php echo e(url('pedidos.id', [$ped->id])); ?>" class='btn btn-ghost-success'><i class="fa fa-file-pdf-o"></i></a>
                <a href="<?php echo e(route('pedidos.show',[$ped->id])); ?>" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                <!-- <a href="<?php echo e(url('pedidos.id', [$ped->id])); ?>" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a> -->
                <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]); ?>

            </div>
            <?php echo Form::close(); ?>

        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
      <?php echo $pedidos->links(); ?>

    </div>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/pedidos/table.blade.php ENDPATH**/ ?>