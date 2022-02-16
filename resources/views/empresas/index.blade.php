 @extends('layouts.app')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Empresa</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                               Empresa
                             <a class="pull-right">
                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".cd-example-modal-lg">Actualizar Datos</button>
                             </a>
                         </div>
                         <div class="card-body">
                           <div class="row">
                             <div class="col-sm-6">
                               <div class="border-bottom text-center pb-4">
                               <img src="{{asset('image/'.$empresas->logo)}}"  width="400px" height="400px" alt="Responsive image"
                               class="img-fluid"/>
                             </div>


                                   </div>
                                  <div class="col-sm-6">
                                    <strong><i class="fa fa-address-card mr-1"></i>
                                    Nombre
                                    </strong>
                                    <p class="text-muted">
                                      {{$empresas->nombre}}
                                    </p>
                                    <hr>
                                    <strong><i class="fa fa-product-hunt mr-1"></i>
                                      Descripcion</strong>
                                      <p class="text-muted">
                                        {{$empresas->descripcion}}
                                      </p>
                                      <hr>
                                    <strong><i class="fa fa-address-card mr-1"></i>
                                      Correo</strong>
                                      <p class="text-muted">
                                        {{$empresas->correo}}
                                      </p>
                                      <hr>
                                    <strong><i class="fa fa-address-card mr-1"></i>
                                      Telefono</strong>
                                      <p class="text-muted">
                                        {{$empresas->telefono}}
                                      </p>
                                      <hr>
                                      <strong><i class="fa fa-address-card mr-1"></i>
                                        Direccion</strong>
                                        <p class="text-muted">
                                          {{$empresas->direccion}}
                                        </p>
                                        <hr>
                                  </div>
                          </div>
                         </div>
                        </div>



  </div>
  </div>
  </div>
  </div>


{!! Form::model($empresas,['route'=>['empresas.update',$empresas],'method'=>'PUT','files'=>true]) !!}

<div class="modal fade cd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
        @include('coreui-templates::common.errors')
      <h5 class="modal-title" id="exampleModalLabel">Actualizar Empresa</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <!-- Nombre Field -->
      <div class="form-group col-sm-12">
        <label for="nombre">Nombre</label>
        <input type="text"  class="form-control" name="nombre" id="nombre" value="{{$empresas->nombre}}" aria-describedby="helpId" placeholder="Nombre">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>

      <!-- Proveedor Field -->
      <div class="form-group col-sm-12">
        <label for="descripcion">Descripción</label>
        <input type="text"  class="form-control" name="descripcion" id="descripcion" value="{{$empresas->descripcion}}" aria-describedby="helpId" placeholder="Nombre">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>

      <!-- Cantidad Field -->
      <div class="form-group col-sm-12">
        <label for="correo">Correo</label>
        <input type="text"  class="form-control" name="correo" id="correo" value="{{$empresas->correo}}" aria-describedby="helpId" placeholder="Nombre">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>

      <!-- Precio Field -->
      <div class="form-group col-sm-12">
        <label for="telefono">Telefono</label>
        <input type="text"  class="form-control" name="telefono" id="telefono" value="{{$empresas->telefono}}" aria-describedby="helpId" placeholder="Nombre">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>

      <!-- Fecha Expiracion Field -->
      <div class="form-group col-sm-12">
        <label for="direccion">Dirección</label>
        <input type="text"  class="form-control" name="direccion" id="direccion" value="{{$empresas->direccion}}" aria-describedby="helpId" placeholder="Nombre">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>

      <!-- Descripcion Field -->
      <div class="card-body">
        <h5 class="card-title d-flex">Logotipo
        <small class="ml-auto align-self-end">
        <a href="dropify.html" class="font-weight-light"
        target="_blank">Seleccionar Archivo</a>
      </small>
    </h5>
      <input type="file" name="picture" id="picture"
      class="dropify"/>
      </div>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
  </div>
</div>
</div>
{!! Form::close()!!}
@endsection

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" />
<script>
  $('.dropify').dropify();
</script>

@endpush
