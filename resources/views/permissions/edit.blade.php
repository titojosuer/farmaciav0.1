@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('permissions.index') !!}">PERMISOS</a>
          </li>
          <li class="breadcrumb-item active">EDITAR PERMISO</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Editar Permiso</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method' => 'patch']) !!}

                              @include('permissions.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
