
<div class="row">
  <div class="col-lg-4">
    <div class="border-bottom text-center pb-4">
      <img src="{{asset('image/'.$productos->imagen)}}" alt="profile"
      class="img-lg rounded-circle mb-3"/>
  </div>
</div>
</div>


<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $productos->nombre }}</p>
</div>

<!-- Categoria Field -->
<div class="form-group">
  <label class="form-control-label" for="nombre">Categoria</label>
  <p><a href="{{route('categorias.show', $productos->categoria)}}">{{$productos->categoria->nombre}}</a></p>
</div>


<!-- Proveedor Field -->
<div class="form-group">
  <label class="form-control-label" for="nombre">Proveedor</label>
  <p><a href="{{route('proveedores.show', $productos->proveedor)}}">{{$productos->proveedor->nombre}}</a></p>
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
