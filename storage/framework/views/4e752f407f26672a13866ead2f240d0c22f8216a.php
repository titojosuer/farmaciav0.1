<div class="table-responsive-sm">
    <table class="table table-striped" id="regimenTributario-table">
        <thead>
            <tr>
        <th>ID</th>
        <th>CAI</th>
        <th>Correlativo Inicial</th>
        <th>Correlativo Final</th>
        <th>Ultimo Correlativo </th>
        <th>Numero Relativo</th>
        <th>Fecha Vencimiento</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $regimenTributario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regimen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($regimen->id); ?></td>
            <td><?php echo e($regimen->cai); ?></td>
            <td><?php echo e($regimen->correlativo_inicial); ?></td>
            <td><?php echo e($regimen->correlativo_final); ?></td>
            <td><?php echo e($regimen->ultimo_correlativo); ?></td>
            <td><?php echo e($regimen->numero_relativo); ?></td>
            <td><?php echo e($regimen->fecha_vencimiento); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['regimenTributario.destroy', $regimen->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('regimenTributario.show', [$regimen->id])); ?>" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="<?php echo e(route('regimenTributario.edit', [$regimen->id])); ?>" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/ventas/regimenTributario/table.blade.php ENDPATH**/ ?>