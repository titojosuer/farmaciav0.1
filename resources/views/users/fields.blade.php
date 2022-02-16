<!-- Nombre Field -->
<div class="form-group col-sm-6">
  <label for="name" class="col-sm-6 col-form-label">Nombre </label>
  @if(Route::is('users.edit') )
  <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{ old('name', $user->name) }}" autofocus>
  @else
  <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
  @endif
                @if ($errors->has('name'))
                  <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                @endif
</div>


<div class="form-group col-sm-6">
<label for="email" class="col-sm-2 col-form-label">Correo</label>
                  @if(Route::is('users.edit') )
                 <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" value="{{ old('email', $user->email) }}">
                 @else
                 <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" value="{{ old('email') }}">
                 @endif
                 @if ($errors->has('email'))
                   <span class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                 @endif
</div>

<div class="form-group col-sm-6">
<label for="password" class="col-sm-2 col-form-label">Contraseña</label>
@if(Route::is('users.edit') )
                <input type="password" class="form-control" name="password" placeholder="Actualiza Contraseña">
@else
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
@endif

                @if ($errors->has('password'))
                  <span class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                @endif
</div>

<div class="row">
<label for="name" class="col-sm-2 control-label">Permisos</label>
<table class="table">
  <tbody>
    @foreach ($roles as $id => $role)
                                           <tr>
                                               <td>
                                                   <div class="form-check">
                                                       @if(Route::is('users.edit') )
                                                       <label class="form-check-label">
                                                           <input class="form-check-input" type="checkbox" name="roles[]"
                                                               value="{{ $id }}" {{ $user->roles->contains($id) ? 'checked' : ''}}
                                                           >
                                                           <span class="form-check-sign">
                                                               <span class="check"></span>
                                                           </span>
                                                       </label>
                                                       @else
                                                       <label class="form-check-label">
                                                           <input class="form-check-input" type="checkbox" name="roles[]"
                                                               value="{{ $id }}"
                                                           >
                                                           <span class="form-check-sign">
                                                               <span class="check"></span>
                                                           </span>
                                                       </label>
                                                       @endif
                                                   </div>
                                               </td>
                                               <td>
                                                   {{ $role }}
                                               </td>
                                           </tr>
                                           @endforeach
</tbody>
</table>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
</div>
