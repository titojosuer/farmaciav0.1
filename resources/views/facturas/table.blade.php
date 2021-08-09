<div class="table-responsive-sm">
    <table class="table table-striped" id="facturas-table">
        <thead>
            <tr>
                <th>Subtotal</th>
        <th>Isv</th>
        <th>Total</th>
        <th>Fecha</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($facturas as $facturas)
            <tr>
                <td>{{ $facturas->subtotal }}</td>
            <td>{{ $facturas->isv }}</td>
            <td>{{ $facturas->total }}</td>
            <td>{{ $facturas->fecha }}</td>
                <td>
                    {!! Form::open(['route' => ['facturas.destroy', $facturas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facturas.show', [$facturas->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('facturas.edit', [$facturas->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>