<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $role->name }}</p>
</div>

<div class="form-group">
    {!! Form::label('guard_name', 'Guard:') !!}
    <p>{{ $role->guard_name }}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', 'Fecha de Creacion:') !!}
    <p>{{ $role->created_at }}</p>
</div>

<div class="card-description">
  @forelse ($role->permissions as $permission)
  <span class="badge rounded-pill bg-dark text-white">{{ $permission->name }}</span>
  @empty
  <span class="badge badge-danger bg-danger">No permissions</span>
  @endforelse
</div>
