<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
  <label for="categoria_id">Categoria</label>
  <select class="form-control" name="categoria_id" id="categoria_id">
    <option value="">----Seleccione una Categoria---</option>
    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($categoria->id); ?>"
    <?php if($categoria->id == $productos->categoria_id): ?>
    selected
    <?php endif; ?>
    ><?php echo e($categoria->nombre); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
</div>

<div class="form-group col-sm-6">
  <label for="laboratorio_id">Laboratorio</label>
  <select class="form-control" name="laboratorio_id" id="laboratorio_id">
  <option value="">----Seleccione un Laboratorio---</option>
    <?php $__currentLoopData = $laboratorios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laboratorio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($laboratorio->id); ?>"
    <?php if($laboratorio->id == $productos->laboratorio_id): ?>
    selected
    <?php endif; ?>
    ><?php echo e($laboratorio->nombre); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
</div>

<!-- Proveedor Field -->
<div class="form-group col-sm-6">
  <label for="proveedor_id">Proveedor</label>
  <select class="form-control" name="proveedor_id" id="proveedor_id">
  <option value="">----Seleccione un proveedor----</option>
    <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($proveedor->id); ?>"
    <?php if($proveedor->id == $productos->proveedor_id): ?>
    selected
    <?php endif; ?>
    ><?php echo e($proveedor->nombre); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('precio', 'Precio:'); ?>

    <?php echo Form::number('precio', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('impuesto', 'Impuesto:'); ?>

    <?php echo Form::number('impuesto', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('descuento', 'Descuento:'); ?>

    <?php echo Form::number('descuento', null, ['class' => 'form-control']); ?>

</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('stock', 'Stock:'); ?>

    <?php echo Form::number('stock', null, ['class' => 'form-control']); ?>

</div>
<!-- Descripcion Field -->
<!-- <div class="form-group col-sm-6">
     <label for="image">Seleccionar Archivo:</label>
<div class="custom-file ">
     <label class="custom-file-label" for ="image">Seleccionar archivo</label>
     <input type="file" class="custom-file-input" name="image" id="image" lang="es" data-default-file="..public\image\1629303973_236473620_3066630026956249_4405281078144464180_n.jpg"  >
</div>
</div> -->

<div class="card-body">
  <div class="form-group col-sm-6">
   <input type="file" name="image" id="image" class="dropify" />
</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary">Cancel</a>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/productos/fields_edit.blade.php ENDPATH**/ ?>