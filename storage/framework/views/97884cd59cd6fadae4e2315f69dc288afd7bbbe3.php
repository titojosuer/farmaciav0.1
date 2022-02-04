<div class="table-responsive-sm">
    <table class="table table-striped" id="clientes-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellido</th>
        <th>Dni</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Email</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clientes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($clientes->nombre); ?></td>
            <td><?php echo e($clientes->apellido); ?></td>
            <td><?php echo e($clientes->dni); ?></td>
            <td><?php echo e($clientes->direccion); ?></td>
            <td><?php echo e($clientes->telefono); ?></td>
            <td><?php echo e($clientes->email); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['clientes.destroy', $clientes->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('clientes.show', [$clientes->id])); ?>" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="<?php echo e(route('clientes.edit', [$clientes->id])); ?>" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/clientes/table.blade.php ENDPATH**/ ?>