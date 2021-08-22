@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('productos.index') !!}">Productos</a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Create Productos</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'productos.store','files'=>true]) !!}

                                   @include('productos.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".cd-example-modal-lg">Large modal</button>

<!-- Modal -->
<div class="modal fade cd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          @include('coreui-templates::common.errors')
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        {!! Form::open(['route' => 'productos.store']) !!}
      <div class="modal-body">
        <!-- Nombre Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('nombre', 'Nombre:') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Proveedor Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('proveedor', 'Proveedor:') !!}
            {!! Form::text('proveedor', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Cantidad Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('cantidad', 'Cantidad:') !!}
            {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Precio Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('precio', 'Precio:') !!}
            {!! Form::text('precio', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Fecha Expiracion Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('fecha_expiracion', 'Fecha Expiracion:') !!}
            {!! Form::date('fecha_expiracion', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Descripcion Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('descripcion', 'Descripcion:') !!}
            {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
  {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" />
<script>
  $('.dropify').dropify();
</script>
@endpush
