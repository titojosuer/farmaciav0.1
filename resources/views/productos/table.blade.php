<div class="table-responsive-sm">
    <table class="table table-striped" id="productos-table">
        <thead>
            <tr>
        <th>ID</th>
         <th>Nombre</th>
        <th>Stock</th>
        <th>Estado</th>
        <th>Categoria</th>
        <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $productos)
            <tr>
              <td>{{ $productos->id }}</td>
                <td>{{ $productos->nombre }}</td>
                  <td>{{ $productos->stock }}</td>
                    <td>{{ $productos->estado }}</td>
            <td>{{ $productos->categoria->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['productos.destroy', $productos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$productos->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('productos.edit', [$productos->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
