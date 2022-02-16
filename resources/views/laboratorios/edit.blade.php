@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('laboratorios.index') !!}">LABORATORIOS</a>
          </li>
          <li class="breadcrumb-item active">EDITAR LABORATORIO</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Editar Categoria</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($laboratorio, ['route' => ['laboratorios.update', $laboratorio->id], 'method' => 'patch']) !!}

                              @include('laboratorios.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
