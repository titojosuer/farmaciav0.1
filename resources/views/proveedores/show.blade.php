@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('proveedores.index') }}">PROVEEDORES</a>
            </li>
            <li class="breadcrumb-item active">DETALLE</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                              <strong>Details</strong>
                                  <!-- <a href="{{ route('proveedores.index') }}" class="btn btn-light">Back</a> -->
                              <a class="pull-right" href="{{ route('proveedores.index') }}"><i class="btn btn-outline-dark"> <strong>REGRESAR</strong></i></a>
                             </div>
                             <div class="card-body">
                                 @include('proveedores.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
