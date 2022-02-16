<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre del rol:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="row">
<label for="name" class="col-sm-2 control-label">Permisos</label>
<table class="table">
  <tbody>
    @foreach ($permissions as $id => $permission)
    <tr>
      <td>
<div class="form-check">
  @if(Route::is('roles.edit') )
  <label class="form-check-label">
  <input class="form-check-input" type="checkbox" name="permissions[]"
  value="{{$id}}"
  {{$role->permissions->contains($id) ? 'checked' : ''}}>
  <span class="form-check-sign">
    <span class="check">
    </span>
  </span>
</label>
@else
<label class="form-check-label">
<input class="form-check-input" type="checkbox" name="permissions[]"
value="{{$id}}"
<span class="form-check-sign">
  <span class="check">
  </span>
</span>
</label>
@endif
</div>
</td>
<td>
  {{$permission}}
</td>
</tr>
  @endforeach
</tbody>
</table>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancel</a>
</div>
