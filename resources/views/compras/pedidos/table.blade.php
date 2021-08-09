<div class="table-responsive-sm">
    <table class="table table-striped" id="pedidos-table">
      <thead>
        <!-- <th>Id</th> -->
        <th>Fecha</th>
        <th>Proveedor</th>
        <th>Tipo Comprobante</th>
        <th>Impuesto</th>
        <th>Total</th>
        <th>Estado</th>
          <th colspan="3">Action</th>
      </thead>
             @foreach ($pedidos as $ped)
      <tr>
        <!-- <td>{{ $ped->id_pedido}}</td> -->
        <td>{{ $ped->fecha_hora}}</td>
        <td>{{ $ped->nombre}}</td>
        <td>{{ $ped->tipo_comprobante}}</td>
        <td>{{ $ped->impuesto}}</td>
        <td>{{ $ped->total}}</td>
        <td>{{ $ped->estado}}</td>
        <td>
            {!! Form::open(['url' => ['compras.pedidos.destroy', $ped->id_pedido], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <a href="{{ url('compras.pedidos.show', [$ped->id_pedido]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                <a href="{{ url('compras.pedidos.id', [$ped->id_pedido]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
            </div>
            {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
        </tbody>
    </table>
</div>
