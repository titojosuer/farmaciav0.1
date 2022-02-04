<?php $__env->startSection('content'); ?>
   <ol class="breadcrumb">
       <li class="breadcrumb-item">Impresora</li>
   </ol>
   <div class="container-fluid">
       <div class="animated fadeIn">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                              Impresora
                            <a class="pull-right">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".cd-example-modal-lg">Configuracion Impresora</button>
                            </a>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-6">
                              <strong><i class="fa fa-address-card mr-1"></i>
                                Nombre</strong>
                                <p class="text-muted">
                                  <?php echo e($impresora->nombre); ?>

                                </p>
                                <hr>
                            </div>


                                  </div>

                         </div>
                        </div>
                       </div>



 </div>
 </div>
 </div>
 </div>


<?php echo Form::model($impresora,['route'=>['impresora.update',$impresora],'method'=>'PUT','files'=>true]); ?>


<div class="modal fade cd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
 <div class="modal-content">
   <div class="modal-header">
       <?php echo $__env->make('coreui-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <h5 class="modal-title" id="exampleModalLabel">Actualizar Empresa</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   <div class="modal-body">
     <!-- Nombre Field -->
     <div class="form-group col-sm-12">
       <label for="nombre">Nombre</label>
       <input type="text"  class="form-control" name="nombre" id="nombre" value="<?php echo e($impresora->nombre); ?>" aria-describedby="helpId" placeholder="Nombre">
       <small id="helpId" class="form-text text-muted">Help text</small>
     </div>


   </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="submit" class="btn btn-primary">Save changes</button>
   </div>
 </div>
</div>
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" />
<script>
 $('.dropify').dropify();
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/impresora/index.blade.php ENDPATH**/ ?>