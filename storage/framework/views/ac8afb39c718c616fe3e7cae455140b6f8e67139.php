<div class="table-responsive-sm">
    <table class="table table-striped" id="permissions-table">
        <thead>
            <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Guard</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($permission->id); ?></td>
            <td><?php echo e($permission->name); ?></td>
            <td><?php echo e($permission->guard_name); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['permissions.destroy', $permission->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('permissions.show', [$permission->id])); ?>" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="<?php echo e(route('permissions.edit', [$permission->id])); ?>" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
    <?php echo $permissions->links(); ?>

    </div>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/permissions/table.blade.php ENDPATH**/ ?>