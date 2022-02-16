<div class="table-responsive-sm">
    <table class="table table-striped productos" id="productos-table">
        <thead>
            <tr>
        <th>ID</th>
         <th>Nombre</th>
        <th>Stock</th>
        <th>Estado</th>
        <th>Categoria</th>
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
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
@push('scripts')
<script>
     $('#productos-table').DataTable({
        processing: true,
        serverSide: true,
        ajax:
         { 
             url: "{{ route('productos.index') }}",
             type: 'GET'
         },
        columns: [
            {data: 'id', name: 'productos.id',orderable: true,searchable:true},
            {data: 'nombre', name: 'productos.nombre',orderable: true,searchable:true},
            {data: 'stock', name: 'productos.stock',orderable: true,searchable:true},
            {data: 'estado', name: 'productos.estado',orderable: true,searchable:true},
            {data: 'categorias', name: 'categorias.nombre',orderable: false,searchable:false},
            {data: 'acciones', name: 'acciones',orderable: false,searchable:false}
        ]
    });
</script>
@endpush
