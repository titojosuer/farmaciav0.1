@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('clientes.index') }}">CLIENTES</a>
            </li>
            <li class="breadcrumb-item active">DETALLE CLIENTE</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>DETALLE CLIENTE</strong>
                                 <a class="pull-right" href="{{ route('clientes.index') }}"><i class="btn btn-outline-dark"> <strong>REGRESAR</strong></i></a>
                             </div>
                             <div class="card-body">
                                 @include('clientes.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
