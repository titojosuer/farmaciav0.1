<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $permission->name }}</p>
</div>

<div class="form-group">
    {!! Form::label('guard_name', 'Guard:') !!}
    <p>{{ $permission->guard_name }}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', 'Fecha de Creacion:') !!}
    <p>{{ $permission->created_at }}</p>
</div>
