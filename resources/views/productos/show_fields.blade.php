<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $productos->nombre }}</p>
</div>

<!-- Categoria Field -->
<div class="form-group">
    {!! Form::label('categoria', 'Categoria:') !!}
    <p>{{ $productos->categoria }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $productos->descripcion }}</p>
</div>

<!-- Proveedor Field -->
<div class="form-group">
    {!! Form::label('proveedor', 'Proveedor:') !!}
    <p>{{ $productos->proveedor }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $productos->cantidad }}</p>
</div>

<!-- Precio Field -->
<div class="form-group">
    {!! Form::label('precio', 'Precio:') !!}
    <p>{{ $productos->precio }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $productos->estado }}</p>
</div>

<!-- Fecha Expiracion Field -->
<div class="form-group">
    {!! Form::label('fecha_expiracion', 'Fecha Expiracion:') !!}
    <p>{{ $productos->fecha_expiracion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $productos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $productos->updated_at }}</p>
</div>

