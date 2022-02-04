)

<?php $__env->startSection('content'); ?>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">USUARIOS</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             USUARIOS
                              <a class="pull-right" href="<?php echo e(route('users.create')); ?>"><i class="btn btn-primary">AGREGAR USUARIOS</i></a>
                         </div>
                         <div class="card-body">
                             <?php echo $__env->make('users.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['activePage' => 'users', 'titlePage' => 'Usuarios'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/users/index.blade.php ENDPATH**/ ?>