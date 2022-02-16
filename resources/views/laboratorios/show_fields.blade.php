<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $laboratorio->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $laboratorio->descripcion }}</p>
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $laboratorio->direccion }}</p>
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $laboratorio->telefono }}</p>
</div>


