<?php $__env->startSection('content'); ?>
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo e(url('compras/pedidos/index')); ?>">Pedidos</a>
            </li>
            <li class="breadcrumb-item active">Detalles de Pedido</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 <?php echo $__env->make('coreui-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Detalles Pedido</strong>
                                  <a class="pull-right" href="<?php echo e(route('pedidos.index')); ?>"><i class="btn btn-outline-dark"> <strong>REGRESAR</strong></i></a>
                             </div>
                             <div class="card-body">
                                <?php echo $__env->make('pedidos.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/pedidos/show.blade.php ENDPATH**/ ?>