@extends('layouts.app')

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
                             <!-- <a class="pull-right" href="{{ route('tipoUsuarios.create') }}"><i class="fa fa-plus-square fa-lg"></i></a> -->
                            <a class="pull-right"  href="{{ route('tipoUsuarios.create') }}"><i class="btn btn-primary">AGREGAR USUARIO</i></a>
                         </div>
                         <div class="card-body">
                             @include('tipo_usuarios.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection
