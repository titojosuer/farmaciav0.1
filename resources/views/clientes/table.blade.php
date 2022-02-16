<div class="table-responsive-sm">
    <table class="table table-striped" id="clientes-table">
        <thead>
            <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dni</th>
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
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>

@push('scripts')
<script>
     $('#clientes-table').DataTable({
        processing: true,
        serverSide: true,
        ajax:
         { 
             url: "{{ route('clientes.index') }}",
             type: 'GET'
         },
        columns: [
            {data: 'nombre', name: 'clientes.nombre',orderable: true,searchable:true},
            {data: 'apellido', name: 'clientes.apellido',orderable: true,searchable:true},
            {data: 'dni', name: 'clientes.dni',orderable: false,searchable:true},
            {data: 'direccion', name: 'clientes.direccion',orderable: false,searchable:true},
            {data: 'telefono', name: 'clientes.telefono',orderable: false,searchable:true},
            {data: 'email', name: 'clientes.email',orderable: false,searchable:true},
            {data: 'acciones', name: 'acciones',orderable: false,searchable:false}
        ]
    });
</script>
@endpush
