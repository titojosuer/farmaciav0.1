<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('principio_activo', 'Principio Activo:') !!}
    {!! Form::text('principio_activo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
  <label for="categoria_id">Categoria</label>
  <select class="form-control" name="categoria_id" id="categoria_id">
    <option value="">----Seleccione una Categoria---</option>
    @foreach ($categorias as $categoria)
    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
    @endforeach
  </select>
</div>

<div class="form-group col-sm-6">
  <label for="laboratorio_id">Laboratorio</label>
  <select class="form-control" name="laboratorio_id" id="laboratorio_id">
  <option value="">----Seleccione un Laboratorio---</option>
    @foreach ($laboratorios as $laboratorio)
    <option value="{{$laboratorio->id}}">{{$laboratorio->nombre}}</option>
    @endforeach
  </select>
</div>

<!-- Proveedor Field -->
<div class="form-group col-sm-6">
  <label for="proveedor_id">Proveedor</label>
  <select class="form-control" name="proveedor_id" id="proveedor_id">
  <option value="">----Seleccione un proveedor----</option>
    @foreach ($proveedores as $proveedor)
    <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
    @endforeach
  </select>
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('impuesto', 'Impuesto:') !!}
    {!! Form::number('impuesto', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('descuento', 'Descuento:') !!}
    {!! Form::number('descuento', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::number('stock', null, ['class' => 'form-control']) !!}
</div>
<!-- Descripcion Field -->
<!-- <div class="form-group col-sm-6">
     <label for="image">Seleccionar Archivo:</label>
<div class="custom-file ">
     <label class="custom-file-label" for ="image">Seleccionar archivo</label>
     <input type="file" class="custom-file-input" name="image" id="image" lang="es" data-default-file="..public\image\1629303973_236473620_3066630026956249_4405281078144464180_n.jpg"  >
</div>
</div> -->

<div class="card-body">
  <div class="form-group col-sm-6">
   <input type="file" name="image" id="image" class="dropify" />
</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
