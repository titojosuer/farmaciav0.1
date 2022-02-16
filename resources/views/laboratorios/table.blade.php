<div class="table-responsive-sm">
    <table class="table table-striped" id="laboratorios-table">
        <thead>
            <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Telefono</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($laboratorios as $laboratorio)
            <tr>
            <td>{{ $laboratorio->id }}</td>
            <td>{{ $laboratorio->nombre }}</td>
            <td>{{ $laboratorio->descripcion }}</td>
            <td>{{ $laboratorio->telefono }}</td>
                <td>
                    {!! Form::open(['route' => ['laboratorios.destroy', $laboratorio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('laboratorios.show', [$laboratorio->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('laboratorios.edit', [$laboratorio->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
