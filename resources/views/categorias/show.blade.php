@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('categorias.index') }}">Categorias</a>
            </li>
            <li class="breadcrumb-item active">Detalle Categoria</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Detalles</strong>
                                  <a href="{{ route('categorias.index') }}" class="btn btn-light">Regresar</a>
                             </div>
                             <div class="card-body">
                                 @include('categorias.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
