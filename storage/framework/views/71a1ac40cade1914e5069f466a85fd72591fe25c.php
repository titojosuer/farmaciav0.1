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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('categorias.index')); ?>" class="btn btn-secondary">Cancel</a>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/categorias/fields.blade.php ENDPATH**/ ?>