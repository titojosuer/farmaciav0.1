@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
            <a href="{!! route('ventas.index') !!}">Ventas</a>
      </li>
      <li class="breadcrumb-item active">Registrar venta</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Ventas</strong>
                            </div>
                            {!! Form::open(['route' => 'ventas.store','method'=>'POST','autocomplete'=>'off'])!!}

                            <div class="card-body">

                              @include('ventas.fields')


                            </div>
                            <div class="card-footer text-muted">
                                <button type="submit" id="guardar" class="btn btn-primary mr-2 float-right">Registrar Venta</button>
                                <a href="{!! route('ventas.index') !!}" class="btn btn-secondary">Cancel</a>
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

var cont = 1;
total = 0;
subtotal = [];

$("#guardar").hide();
$("#producto_id").change(mostrarValores);

function mostrarValores(){
  datosProducto = document.getElementById('producto_id').value.split('_');
  $('#precio').val(datosProducto[2]);
  $('#stock').val(datosProducto[1]);

}

function agregar() {
  datosProducto  = document.getElementById('producto_id').value.split('_');
  producto_id = datosProducto[0];
    id_producto = $("#producto_id").val();
    producto = $("#producto_id option:selected").text();
    cantidad = $("#cantidad").val();
    descuento = $("#descuento").val();
    precio = $("#precio").val();
    stock = $("#stock").val();
    impuesto = $("#impuesto").val();

    if (id_producto != "" && cantidad != "" && cantidad > 0 && descuento!= "" && precio != "") {
      if(parseInt(stock)>=parseInt(cantidad)){
        subtotal[cont] = (cantidad * precio)-(cantidad*precio*descuento/100);
        total = total + subtotal[cont];
        var fila = '<tr class="selected" id="fila' + cont + '"><td><button type="button" class="btn btn-danger btn-sm"  onclick="eliminar(' + cont + ');"><i class="fa fa-times fa-2x"></i></button></td><td><input type="hidden" name="producto_id[]" value="'+producto_id +'">' + producto + '</td><td><input type="hidden" name="precio[]" value="' +parseFloat(precio).toFixed(2) +'"><input class= "form-control" type="number" value="'+ parseFloat(precio).toFixed(2)+'" disabled></td><td><input type="hidden" name ="descuento[]" value="'+parseFloat(descuento)+'"><input class="form-control" type="number" value="'+ parseFloat(descuento) +'" disabled></td><td><input type="hidden" name ="cantidad[]" value="'+cantidad+'"><input class="form-control" type="number" value="'+ cantidad +'" disabled></td><td align="right">s/' + parseFloat(subtotal[cont]).toFixed(2) + '</td></tr>';
        cont++;
        limpiar();
        totales();
        evaluar();
        $('#detalles').append(fila);
      } else {
          Swal.fire({
              icon: 'error',
              text: 'La cantidad supera el stock',
          })
      }
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
 $('#descuento').val("0");
}

function totales(){
  $('#total').html("PEN" + total.toFixed(2));
  total_impuesto=total * impuesto/100;
  total_pagar = total + total_impuesto;
  $('#total_impuesto').html("PEN" + total_impuesto.toFixed(2));
    $('#total_pagar_html').html("PEN" + total_pagar.toFixed(2));
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
  $('#total').html("PEN" + total);
  $('#total_impuesto').html("PEN" + total_impuesto);
  $('#total_pagar_html').html("PEN" + total_pagar_html);
  $('#total_pagar').val(total_pagar_html.toFixed(2));
  $('#fila' + index).remove();
  evaluar();
}
</script>
@endpush
