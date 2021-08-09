<!-- Subtotal Field -->
<div class="form-group">
    {!! Form::label('subtotal', 'Subtotal:') !!}
    <p>{{ $facturas->subtotal }}</p>
</div>

<!-- Isv Field -->
<div class="form-group">
    {!! Form::label('isv', 'Isv:') !!}
    <p>{{ $facturas->isv }}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $facturas->total }}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $facturas->fecha }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $facturas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $facturas->updated_at }}</p>
</div>

