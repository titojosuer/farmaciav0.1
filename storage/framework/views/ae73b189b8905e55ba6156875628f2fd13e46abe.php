<div class="table-responsive-sm">
    <table class="table table-striped" id="categorias-table">
        <thead>
            <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($categoria->id); ?></td>
            <td><?php echo e($categoria->nombre); ?></td>
            <td><?php echo e($categoria->descripcion); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['categorias.destroy', $categoria->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('categorias.show', [$categoria->id])); ?>" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="<?php echo e(route('categorias.edit', [$categoria->id])); ?>" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/categorias/table.blade.php ENDPATH**/ ?>