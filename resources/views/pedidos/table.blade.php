<div class="table-responsive-sm">
    <table class="table table-striped" id="pedidos-table">
      <thead>
        <th>Id</th>
        <th>Fecha</th>
        <th>Proveedor</th>
        <th>Impuesto</th>
        <th>Total</th>
        <th>Estado</th>
          <th colspan="3">Action</th>
      </thead>
             @foreach ($pedidos as $ped)
      <tr>
        <td>{{ $ped->id}}</td>
        <td>{{ $ped->fecha}}</td>
        <td>{{ $ped->proveedor->nombre}}</td>
        <td>{{ $ped->impuesto}}</td>
        <td>{{ $ped->total}}</td>
        @if($ped->estado=='EN STOCK')
        <td>
        <a class="btn btn-ghost-success" href="{{route('cambiar.estado.pedido', $ped)}}">
        {{ $ped->estado }}
        </a>
        </td>
        @else
        <td>
        <a class= "btn btn-ghost-danger" href="{{route('cambiar.estado.pedido', $ped)}}">
        {{ $ped->estado }}
        </a>
        </td>
        @endif
        <td style="width:100px;">
            {!! Form::open(['url' => ['pedidos.destroy', $ped->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <a href="{{ url('pedidos.id', [$ped->id]) }}" class='btn btn-ghost-success'><i class="fa fa-file-pdf-o"></i></a>
                <a href="{{ route('pedidos.show',[$ped->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                <!-- <a href="{{ url('pedidos.id', [$ped->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a> -->
                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
            </div>
            {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
      {!!$pedidos->links()!!}
    </div>
</div>
