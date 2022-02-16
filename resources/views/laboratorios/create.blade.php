@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('laboratorios.index') !!}">LABORATORIOS</a>
      </li>
      <li class="breadcrumb-item active">NUEVO LABORATORIO</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Registrar Laboratorio</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'laboratorios.store']) !!}

                                   @include('laboratorios.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
