<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo e($laboratorio->nombre); ?></p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    <?php echo Form::label('descripcion', 'Descripcion:'); ?>

    <p><?php echo e($laboratorio->descripcion); ?></p>
</div>

<div class="form-group">
    <?php echo Form::label('direccion', 'Direccion:'); ?>

    <p><?php echo e($laboratorio->direccion); ?></p>
</div>

<div class="form-group">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <p><?php echo e($laboratorio->telefono); ?></p>
</div>


<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/laboratorios/show_fields.blade.php ENDPATH**/ ?>