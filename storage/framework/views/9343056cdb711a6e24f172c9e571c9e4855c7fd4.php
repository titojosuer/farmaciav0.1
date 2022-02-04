<?php $__env->startSection('content'); ?>
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="<?php echo route('users.index'); ?>">USUARIOS</a>
          </li>
          <li class="breadcrumb-item active">EDITAR USUARIO</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             <?php echo $__env->make('coreui-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Editar Usuario</strong>
                          </div>
                          <div class="card-body">
                              <?php echo Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']); ?>


                              <?php echo $__env->make('users.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                              <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/users/edit.blade.php ENDPATH**/ ?>