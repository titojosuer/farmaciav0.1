@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('tipoUsuarios.index') }}">USUARIOS</a>
            </li>
            <li class="breadcrumb-item active">Detail</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>DETALLE USUARIO</strong>
                                  <!-- <a href="{{ route('tipoUsuarios.index') }}" class="btn btn-light">Back</a> -->
                              <a class="pull-right" href="{{ route('tipoUsuarios.index') }}"><i class="btn btn-outline-dark"> <strong>REGRESAR</strong></i></a>
                             </div>
                             <div class="card-body">
                                 @include('tipo_usuarios.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
