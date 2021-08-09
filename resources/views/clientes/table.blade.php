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
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientes as $clientes)
            <tr>
                <td>{{ $clientes->nombre }}</td>
            <td>{{ $clientes->apellido }}</td>
            <td>{{ $clientes->dni }}</td>
            <td>{{ $clientes->direccion }}</td>
            <td>{{ $clientes->telefono }}</td>
            <td>{{ $clientes->email }}</td>
                <td>
                    {!! Form::open(['route' => ['clientes.destroy', $clientes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clientes.show', [$clientes->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('clientes.edit', [$clientes->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>