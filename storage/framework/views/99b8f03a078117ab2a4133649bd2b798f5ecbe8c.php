<div class="table-responsive-sm">
    <table class="table table-striped" id="proveedores-table">
        <thead>
            <tr>
         <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
     $('#proveedores-table').DataTable({
        processing: true,
        serverSide: true,
        ajax:
         { 
             url: "<?php echo e(route('proveedores.index')); ?>",
             type: 'GET'
         },
        columns: [
            {data: 'nombre', name: 'proveedores.nombre',orderable: true,searchable:true},
            {data: 'direccion', name: 'proveedores.direccion',orderable: true,searchable:true},
            {data: 'telefono', name: 'proveedores.telefono',orderable: false,searchable:false},
            {data: 'email', name: 'proveedores.email',orderable: false,searchable:true},
            {data: 'acciones', name: 'acciones',orderable: false,searchable:false}
        ]
    });
</script>
<?php $__env->stopPush(); ?>

<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/proveedores/table.blade.php ENDPATH**/ ?>