@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('compras/pedidos/index') }}">Pedidos</a>
            </li>
            <li class="breadcrumb-item active">Detalles de Pedido</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Detalles Pedido</strong>
                                  <a class="pull-right" href="{{ route('pedidos.index') }}"><i class="btn btn-outline-dark"> <strong>REGRESAR</strong></i></a>
                             </div>
                             <div class="card-body">
                                @include('pedidos.show_fields')

                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
