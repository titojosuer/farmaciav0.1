<?php $__env->startSection('content'); ?>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">CLIENTES</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             CLIENTES
                             <!-- <a class="pull-right" href="<?php echo e(route('clientes.create')); ?>"><i class="fa fa-plus-square fa-lg"></i></a> -->
                               <a class="pull-right" href="<?php echo e(route('clientes.create')); ?>"><i class="btn btn-primary">AGREGAR CLIENTE</i></a>
                         </div>
                         <div class="card-body">
                             <?php echo $__env->make('clientes.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/clientes/index.blade.php ENDPATH**/ ?>