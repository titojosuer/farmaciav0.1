<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Nombre del permiso:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('permissions.index')); ?>" class="btn btn-secondary">Cancel</a>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/permissions/fields.blade.php ENDPATH**/ ?>