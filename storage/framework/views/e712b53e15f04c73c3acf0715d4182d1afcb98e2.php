<?php $__env->startSection('content'); ?>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
            <a href="<?php echo route('ventas.index'); ?>">VENTAS</a>
      </li>
      <li class="breadcrumb-item active">NUEVA VENTA</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                <?php echo $__env->make('coreui-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>VENTAS</strong>
                            </div>
                            <?php echo Form::open(['route' => 'ventas.store','method'=>'POST','autocomplete'=>'off']); ?>


                            <div class="card-body">

                              <?php echo $__env->make('ventas.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                            </div>
                            <div class="card-footer text-muted">
                                <button type="submit" id="guardar" class="btn btn-primary mr-2 float-right">Registrar Venta</button>
                                <a href="<?php echo route('ventas.index'); ?>" class="btn btn-secondary">Cancel</a>
                            </div>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
           </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
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
  console.log(datosProducto);
  $('#precio').val(datosProducto[1]);
  $('#stock').val(datosProducto[2]);
  $('#impuesto').val(datosProducto[3]);
  $('#producto_descuento').val(datosProducto[4]);

}

var producto_id = $('#producto_id');

 producto_id.change(function(){
   $.ajax({
     url:"<?php echo e(route('get_productos_by_id')); ?>",
     method:'GET',
     data:{
       producto_id:producto_id.val(),
     },
     success: function(data){
       $("#precio").val(data.precio);
       $("#stock").val(data.stock);
       $("#codigo").val(data.codigo);
       $("#producto_descuento").val(data.descuento);
       $("#impuesto").val(data.impuesto);
     }
   });
 });



$(obtener_registro());
function obtener_registro(codigo){
  $.ajax({
    url:"<?php echo e(route('get_productos_by_barcode')); ?>",
    type:'GET',
    data: {
      codigo: codigo
    },
    success:function(data){
      $("#precio").val(data.precio);
      $("#producto_descuento").val(data.descuento);
      $("#impuesto").val(data.impuesto);
      $("#stock").val(data.stock);
    }
  });
}

$(document).on('keyup','#codigo',function(){
  var valorResultado = $(this).val();
  if(valorResultado!=""){
    obtener_registro(valorResultado);
  }else{
    obtener_registro(valorResultado);
  }
})


function agregar() {
  datosProducto  = document.getElementById('producto_id').value.split('_');
    producto_id = datosProducto[0];
    id_producto = $("#producto_id").val();
    id_cliente = $("#cliente_id").val();
    producto = $("#producto_id option:selected").text();
    cantidad = $("#cantidad").val();
    descuento = $("#producto_descuento").val();
    descuento_total = $("#descuento").val();
    precio = $("#precio").val();
    stock = $("#stock").val();
    impuesto = $("#impuesto").val();

    if (id_cliente != "" && id_producto != "" && cantidad != "" && cantidad > 0 && precio != "") {
      if(parseInt(stock)>=parseInt(cantidad)){
        console.log((descuento_total/100)+(descuento/100));
        subtotal[cont] = (cantidad * precio)-(cantidad*precio*((descuento_total/100)+(descuento/100)));
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
  $('#stock').val("");
  $("#producto_descuento").val("");
  $("#impuesto").val("");
  $('#descuento').val("0");
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/ventas/create.blade.php ENDPATH**/ ?>