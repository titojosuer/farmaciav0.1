@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! url('pedidos') !!}">PEDIDOS</a>
      </li>
      <li class="breadcrumb-item active">NUEVO PEDIDO</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>NUEVO PEDIDO</strong>
                            </div>
                            {!! Form::open(['route' => 'pedidos.store','method'=>'POST','autocomplete'=>'off'])!!}

                            <div class="card-body">

                              @include('pedidos.fields')


                            </div>
                            <div class="card-footer text-muted">
                                <button type="submit" id="guardar" class="btn btn-primary mr-2 float-right">Registrar Compra</button>
                                <a href="{{ url('pedidos') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script >
$(document).ready(function() {
    $("#agregar").click(function() {
        agregar();
    });
});

var cont = 0;
total = 0;
subtotal = [];

$("#guardar").hide();

function agregar() {
    id_producto = $("#id_producto").val();
    producto = $("#id_producto option:selected").text();
    cantidad = $("#cantidad").val();
    precio = $("#precio").val();
    impuesto = $("#impuesto").val();

    if (id_producto != "" && cantidad != "" && cantidad > 0 && precio != "") {
        subtotal[cont] = cantidad * precio;
        total = total + subtotal[cont];
        var fila = '<tr class="selected" id="fila' + cont + '"><td><button type="button" class="btn btn-danger btn-sm"  onclick="eliminar(' + cont + ');"><i class="fa fa-times"></i></button></td>  <td><input type="hidden" name="id_producto[]" value="'+id_producto +'">' + producto + '</td><td><input type="hidden" id="precio[]" name="precio[]" value="' +precio +'"><input class= "form-control" type="number" id="precio[]" value="'+precio+'" disabled></td><td><input type="hidden" name ="cantidad[]" value="'+cantidad+'"><input class="form-control" type="number" value="'+cantidad+'"disabled></td>  <td align="right">s/' +subtotal[cont] + '</td></tr>';
        cont++;
        limpiar();
        totales();
        evaluar();
        $('#detalles').append(fila);
      }else {
          Swal.fire({
              icon: 'error',
              text: 'Rellene todos los campos del detalle compra',
          })
      }
}


function limpiar(){
  $('#cantidad').val("");
  $('#precio').val("");
}

function totales(){
  $('#total').html("LPS" + total.toFixed(2));
  total_impuesto=total * impuesto/100;
  total_pagar = total + total_impuesto;
  $('#total_impuesto').html("LPS" + total_impuesto.toFixed(2));
    $('#total_pagar_html').html("LPS" + total_pagar.toFixed(2));
      $('#total_pagar').val(total_pagar.toFixed(2));
    }


function evaluar(){
  if(total>0){
    $('#guardar').show();
  }else{
    $("#guardar").hide();
  }
}

function eliminar(index){
  total= total-subtotal[index];
  total_impuesto=total*impuesto/100;
  total_pagar_html = total + total_impuesto;
  $('#total').html("LPS" + total);
  $('#total_impuesto').html("LPS" + total_impuesto);
  $('#total_pagar_html').html("LPS" + total_pagar_html);
  $('#total_pagar').val(total_pagar_html.toFixed(2));
  $('#fila' + index).remove();
  evaluar();
}
</script>
@endpush
