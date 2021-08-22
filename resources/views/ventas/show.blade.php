@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('ventas.index') }}">Detalle</a>
            </li>
            <li class="breadcrumb-item active">Detalle Venta</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Detalles Venta</strong>
                                  <a href="{{ route('ventas.index') }}" class="btn btn-light">Regresar</a>
                             </div>
                             <div class="card-body">
                                 @include('ventas.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
