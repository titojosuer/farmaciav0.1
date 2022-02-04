<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Nombre:'); ?>

    <p><?php echo e($permission->name); ?></p>
</div>

<div class="form-group">
    <?php echo Form::label('guard_name', 'Guard:'); ?>

    <p><?php echo e($permission->guard_name); ?></p>
</div>

<div class="form-group">
    <?php echo Form::label('created_at', 'Fecha de Creacion:'); ?>

    <p><?php echo e($permission->created_at); ?></p>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/permissions/show_fields.blade.php ENDPATH**/ ?>