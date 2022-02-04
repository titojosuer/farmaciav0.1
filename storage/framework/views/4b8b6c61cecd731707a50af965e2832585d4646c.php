<div class="table-responsive-sm">
    <table class="table table-striped" id="productos-table">
        <thead>
            <tr>
        <th>ID</th>
         <th>Nombre</th>
        <th>Stock</th>
        <th>Estado</th>
        <th>Categoria</th>
        <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($producto->id); ?></td>
                <td><?php echo e($producto->nombre); ?></td>
                  <td><?php echo e($producto->stock); ?></td>
                  <?php if($producto->estado=='ACTIVO'): ?>
                  <td>
                  <a class="btn btn-ghost-success" href="<?php echo e(route('cambiar.estado.producto', $producto)); ?>">
                  <?php echo e($producto->estado); ?>

                  </a>
                  </td>
                  <?php else: ?>
                  <td>
                  <a class= "btn btn-ghost-danger" href="<?php echo e(route('cambiar.estado.producto', $producto)); ?>">
                  <?php echo e($producto->estado); ?>

                  </a>
                  </td>
                  <?php endif; ?>

            <td><?php echo e($producto->categoria->nombre); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('productos.show', [$producto->id])); ?>" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="<?php echo e(route('productos.edit', [$producto->id])); ?>" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="<?php echo e(route('productos.delete', [$producto->id])); ?>" title="Eliminar Producto"
                         class='btn btn-ghost-secondary'><i class="fa fa-trash text-danger fa-lg"></i>
                        </a>
                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
    <?php echo $productos->links(); ?>

    </div>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/productos/table.blade.php ENDPATH**/ ?>