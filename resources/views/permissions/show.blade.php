@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('permissions.index') }}">Permisos</a>
            </li>
            <li class="breadcrumb-item active">Detalle Permiso</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Detalles Permisos</strong>
                                  <a href="{{ route('permissions.index') }}" class="btn btn-light">Regresar</a>
                             </div>
                             <div class="card-body">
                                 @include('permissions.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
