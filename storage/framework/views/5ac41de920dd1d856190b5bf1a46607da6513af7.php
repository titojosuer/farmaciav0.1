<!-- Nombre Field -->
<div class="form-group col-sm-6">
  <label for="name" class="col-sm-6 col-form-label">Nombre </label>
  <?php if(Route::is('users.edit') ): ?>
  <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="<?php echo e(old('name', $user->name)); ?>" autofocus>
  <?php else: ?>
  <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="<?php echo e(old('name')); ?>" autofocus>
  <?php endif; ?>
                <?php if($errors->has('name')): ?>
                  <span class="error text-danger" for="input-name"><?php echo e($errors->first('name')); ?></span>
                <?php endif; ?>
</div>


<div class="form-group col-sm-6">
<label for="email" class="col-sm-2 col-form-label">Correo</label>
                  <?php if(Route::is('users.edit') ): ?>
                 <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" value="<?php echo e(old('email', $user->email)); ?>">
                 <?php else: ?>
                 <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" value="<?php echo e(old('email')); ?>">
                 <?php endif; ?>
                 <?php if($errors->has('email')): ?>
                   <span class="error text-danger" for="input-email"><?php echo e($errors->first('email')); ?></span>
                 <?php endif; ?>
</div>

<div class="form-group col-sm-6">
<label for="password" class="col-sm-2 col-form-label">Contraseña</label>
<?php if(Route::is('users.edit') ): ?>
                <input type="password" class="form-control" name="password" placeholder="Actualiza Contraseña">
<?php else: ?>
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
<?php endif; ?>

                <?php if($errors->has('password')): ?>
                  <span class="error text-danger" for="input-password"><?php echo e($errors->first('password')); ?></span>
                <?php endif; ?>
</div>

<div class="row">
<label for="name" class="col-sm-2 control-label">Permisos</label>
<table class="table">
  <tbody>
    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <tr>
                                               <td>
                                                   <div class="form-check">
                                                       <?php if(Route::is('users.edit') ): ?>
                                                       <label class="form-check-label">
                                                           <input class="form-check-input" type="checkbox" name="roles[]"
                                                               value="<?php echo e($id); ?>" <?php echo e($user->roles->contains($id) ? 'checked' : ''); ?>

                                                           >
                                                           <span class="form-check-sign">
                                                               <span class="check"></span>
                                                           </span>
                                                       </label>
                                                       <?php else: ?>
                                                       <label class="form-check-label">
                                                           <input class="form-check-input" type="checkbox" name="roles[]"
                                                               value="<?php echo e($id); ?>"
                                                           >
                                                           <span class="form-check-sign">
                                                               <span class="check"></span>
                                                           </span>
                                                       </label>
                                                       <?php endif; ?>
                                                   </div>
                                               </td>
                                               <td>
                                                   <?php echo e($role); ?>

                                               </td>
                                           </tr>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-secondary">Cancel</a>
</div>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/users/fields.blade.php ENDPATH**/ ?>