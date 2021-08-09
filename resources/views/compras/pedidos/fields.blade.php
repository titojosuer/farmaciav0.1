
<div class="row">
<!-- Subtotal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proveedor', 'Proveedor:') !!}
    {!! Form::text('proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Isv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row">
<!-- Total Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tipo_comprobante', 'Tipo Comprobante:') !!}
    {!! Form::text('tipo_comprobante', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-4">
    {!! Form::label('num_comprobante', 'Numero Comprobante:') !!}
    {!! Form::text('num_comprobante', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-4">
    {!! Form::label('serie_comprobante', 'Serie Comprobante:') !!}
    {!! Form::text('serie_comprobante', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row">
<!-- Total Field -->
<div class="form-group col-sm-4">
    {!! Form::label('producto', 'Producto:') !!}
    {!! Form::text('producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cantidad', 'cantidad:') !!}
    {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-2">
    {!! Form::label('precio_compra', 'Precio Compra:') !!}
    {!! Form::text('precio_compra', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-2">
    {!! Form::label('precio_venta', 'Precio Venta:') !!}
    {!! Form::text('precio_venta', null, ['class' => 'form-control']) !!}
</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ url('compras/pedidos/index') }}" class="btn btn-secondary">Cancel</a>
</div>
