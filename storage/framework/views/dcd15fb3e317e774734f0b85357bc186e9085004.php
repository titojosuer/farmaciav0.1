<?php $__env->startSection('content'); ?>
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('productos.index')); ?>">Productos</a>
            </li>
            <li class="breadcrumb-item active">Detail</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 <?php echo $__env->make('coreui-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Details</strong>
                                  <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-light">Back</a>
                             </div>
                             <div class="card-body">
                                 <?php echo $__env->make('productos.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/productos/show.blade.php ENDPATH**/ ?>