@extends('layouts.app',['activePage' => 'users', 'titlePage' => 'Usuarios']))

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">USUARIOS</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             USUARIOS
                              <a class="pull-right" href="{{ route('users.create') }}"><i class="btn btn-primary">AGREGAR USUARIOS</i></a>
                         </div>
                         <div class="card-body">
                             @include('users.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection
