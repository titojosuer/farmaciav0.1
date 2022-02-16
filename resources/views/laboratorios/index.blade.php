@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">LABORATORIOS</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             LABORATORIOS
                              <a class="pull-right" href="{{ route('laboratorios.create') }}"><i class="btn btn-primary">AGREGAR LABORATORIO</i></a>
                         </div>
                         <div class="card-body">
                             @include('laboratorios.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection
