@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('proveedores.index') !!}">PROVEEDORES</a>
          </li>
          <li class="breadcrumb-item active">EDITAR PROVEEDOR</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>EDITAR PROVEEDOR</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($proveedores, ['route' => ['proveedores.update', $proveedores->id], 'method' => 'patch']) !!}

                              @include('proveedores.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
