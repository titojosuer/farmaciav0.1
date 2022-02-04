<!-- Nombre Field -->
<div class="row">
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('apellido', 'Apellido:'); ?>

    <?php echo Form::text('apellido', null, ['class' => 'form-control']); ?>

</div>
</div>

<div class="row">
<!-- Dni Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dni', 'Dni:'); ?>

    <?php echo Form::text('dni', null, ['class' => 'form-control']); ?>

</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <?php echo Form::text('telefono', null, ['class' => 'form-control']); ?>

</div>
</div>

<div class="row">
<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('direccion', 'Direccion:'); ?>

    <?php echo Form::textarea('direccion', null, ['class' => 'form-control']); ?>

</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-secondary">Cancel</a>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/clientes/fields.blade.php ENDPATH**/ ?>