<div class="table-responsive-sm">
    <table class="table table-striped" id="regimenTributario-table">
        <thead>
            <tr>
        <th>ID</th>
        <th>CAI</th>
        <th>Correlativo Inicial</th>
        <th>Correlativo Final</th>
        <th>Ultimo Correlativo </th>
        <th>Numero Relativo</th>
        <th>Fecha Vencimiento</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($regimenTributario as $regimen)
            <tr>
            <td>{{ $regimen->id }}</td>
            <td>{{ $regimen->cai }}</td>
            <td>{{ $regimen->correlativo_inicial }}</td>
            <td>{{ $regimen->correlativo_final }}</td>
            <td>{{ $regimen->ultimo_correlativo }}</td>
            <td>{{ $regimen->numero_relativo }}</td>
            <td>{{ $regimen->fecha_vencimiento }}</td>
                <td>
                    {!! Form::open(['route' => ['regimenTributario.destroy', $regimen->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('regimenTributario.show', [$regimen->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('regimenTributario.edit', [$regimen->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
