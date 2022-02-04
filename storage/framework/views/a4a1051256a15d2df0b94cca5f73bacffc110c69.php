<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('descripcion', 'Descripcion:'); ?>

    <?php echo Form::text('descripcion', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('direccion', 'Direccion:'); ?>

    <?php echo Form::text('direccion', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <?php echo Form::text('telefono', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('laboratorios.index')); ?>" class="btn btn-secondary">Cancelar</a>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/laboratorios/fields.blade.php ENDPATH**/ ?>