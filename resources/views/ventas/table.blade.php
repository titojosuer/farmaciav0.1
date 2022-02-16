<div class="table-responsive-sm">
    <table class="table table-striped" id="ventas-table">
      <thead>
        <th>Id</th>
        <th>Fecha</th>
        <th>Total</th>
        <th>Estado</th>
          <th colspan="3">Acciones</th>
      </thead>
             @foreach ($ventas as $venta)
      <tr>
        <td>{{ $venta->id}}</td>
        <td>{{ $venta->fecha}}</td>
        <td>{{ $venta->total}}</td>
        @if($venta->estado=='VALIDA')
        <td>
        <a class="btn btn-ghost-success" href="{{route('cambiar.estado.venta', $venta)}}">
        {{ $venta->estado }}
        </a>
        </td>
        @else
        <td>
        <a class= "btn btn-ghost-danger" href="{{route('cambiar.estado.venta', $venta)}}">
        {{ $venta->estado }}
        </a>
        </td>
        @endif
        <td style="width:100px;">
            {!! Form::open(['url' => ['ventas.destroy', $venta->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <!-- <a href="{{ url('ventas.id', [$venta->id]) }}" class='btn btn-ghost-success'><i class="fa fa-file-pdf-o"></i></a> -->
                <a href="{{ route('ventas.show',[$venta->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                <a href="{{ route('print.venta', $venta) }}" class='btn btn-ghost-info'><i class="fa fa-print"></i></a>
                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
            </div>
            {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
      {!!$ventas->links()!!}
    </div>
</div>
