<div class="table-responsive-sm">
    <table class="table table-striped" id="laboratorios-table">
        <thead>
            <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Telefono</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $laboratorios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laboratorio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($laboratorio->id); ?></td>
            <td><?php echo e($laboratorio->nombre); ?></td>
            <td><?php echo e($laboratorio->descripcion); ?></td>
            <td><?php echo e($laboratorio->telefono); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['laboratorios.destroy', $laboratorio->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('laboratorios.show', [$laboratorio->id])); ?>" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="<?php echo e(route('laboratorios.edit', [$laboratorio->id])); ?>" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/laboratorios/table.blade.php ENDPATH**/ ?>