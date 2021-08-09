<div class="table-responsive-sm">
    <table class="table table-striped" id="proveedores-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($proveedores as $proveedores)
            <tr>
                <td>{{ $proveedores->nombre }}</td>
            <td>{{ $proveedores->direccion }}</td>
            <td>{{ $proveedores->telefono }}</td>
            <td>{{ $proveedores->email }}</td>
                <td>
                    {!! Form::open(['route' => ['proveedores.destroy', $proveedores->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('proveedores.show', [$proveedores->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('proveedores.edit', [$proveedores->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>