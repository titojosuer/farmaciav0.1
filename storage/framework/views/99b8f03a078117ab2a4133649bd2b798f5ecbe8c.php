<div class="table-responsive-sm">
    <table class="table table-striped" id="proveedores-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Email</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($proveedores->nombre); ?></td>
            <td><?php echo e($proveedores->direccion); ?></td>
            <td><?php echo e($proveedores->telefono); ?></td>
            <td><?php echo e($proveedores->email); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['proveedores.destroy', $proveedores->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('proveedores.show', [$proveedores->id])); ?>" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="<?php echo e(route('proveedores.edit', [$proveedores->id])); ?>" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/proveedores/table.blade.php ENDPATH**/ ?>