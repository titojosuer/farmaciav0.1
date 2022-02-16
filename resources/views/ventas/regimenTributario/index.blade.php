@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">REGIMEN TRIBUTARIO</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             REGIMEN TRIBUTARIO
                              <a class="pull-right" href="{{ route('regimenTributario.create') }}"><i class="btn btn-primary">AGREGAR REGIMEN</i></a>
                         </div>
                         <div class="card-body">
                             @include('ventas.regimenTributario.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection
