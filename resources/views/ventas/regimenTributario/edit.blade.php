@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('regimenTributario.index') !!}">REGIMEN TRIBUTARIO</a>
          </li>
          <li class="breadcrumb-item active">EDITAR REGIMEN TRIBUTARIO</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Editar Regimen Tributario</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($regimenTributario, ['route' => ['regimenTributario.update', $regimenTributario->id], 'method' => 'patch']) !!}

                              @include('ventas.regimenTributario.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
