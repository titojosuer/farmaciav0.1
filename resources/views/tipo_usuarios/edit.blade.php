@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('tipoUsuarios.index') !!}">USUARIOS</a>
          </li>
          <li class="breadcrumb-item active">EDITAR USUARIO</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>EDITAR USUARIO</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($tipoUsuarios, ['route' => ['tipoUsuarios.update', $tipoUsuarios->id], 'method' => 'patch']) !!}

                              @include('tipo_usuarios.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
