<?php $__env->startSection('content'); ?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">HOME</li>
</ol>
  <div class="container-fluid">
        <div class="animated fadeIn">
             <div class="row">
               <div class="col-lg-12">
                   <div class="card">
                       <div class="card-header">
                           <i class="fa fa-align-justify"></i>
                             Panel Administrador
                       </div>
                       <div class="card-body">
                            <div class="pull-right mr-3">
                            </div>
                            <?php $__currentLoopData = $totales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">


                              <div class="col-lg-6 col-xs-6">
                                <div class="card text-white bg-primary ">
                                <div class="card-body pb-0">
                                  <div class="float-right">
                                    <i class="fa fa-cart-plus fa-4x"></i>
                                  </div>
                                  <div class="text-value h3"><strong>LPS <?php echo e($total->totalcompra); ?> (MES ACTUAL)</strong>
                                  </div>
                                  <div class="h4">Compras</div>
                                </div>
                                <div class="chart-wrapper mt-3 mx-3" style="height:35px;">
                                  <a href = "<?php echo e(route('pedidos.index')); ?>"
                                  class="small-box-footer h4">Compras<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                                </div>
                                </div>

                                <div class="col-lg-6 col-xs-6">
                                  <div class="card text-white bg-success">
                                  <div class="card-body pb-0">
                                    <div class="float-right">
                                      <i class="fa fa-cart-arrow-down fa-4x"></i>
                                    </div>
                                    <div class="text-value h2"><strong>LPS <?php echo e($total->totalventa); ?> (MES ACTUAL)</strong>
                                    </div>
                                    <div class="h4">Ventas</div>
                                  </div>
                                  <div class="chart-wrapper mt-3 mx-3" style="height:35px;">
                                    <a href = "<?php echo e(route('ventas.index')); ?>"
                                    class="small-box-footer h4">Ventas<i class=" fa fa-arrow-circle-right"></i></a>
                                  </div>
                                  </div>
                                  </div>


                              </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                              </div>

                                                          </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="card card-chart">
                                    <div class="card-header">
                                      <h4 class="text-center">Compras -Meses</h4>
                                    </div>
                                    <div class="card-content">
                                      <div class="ct-chart">
                                        <canvas id="compras"></canvas>
                                      </div>
                                    </div>


                                  </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="card card-chart">
                                      <div class="card-header">
                                        <h4 class="text-center">Ventas -Meses</h4>
                                      </div>
                                      <div class="card-content">
                                        <div class="ct-chart">
                                          <canvas id="ventas"></canvas>
                                        </div>
                                      </div>


                                    </div>
                                    </div>
                              </div>

                              <div class="row">
                              <div class="col-lg-12 grid margin stretch-card">
                                <div class="card card-chart">
                                    <div class="card-header">
                                      <h4 class="text-center">Ventas-Diarias</h4>
                                    </div>
                                    <div class="card-content">
                                      <div class="ct-chart">
                                        <canvas id="ventas_diarias" height="100"></canvas>
                                      </div>
                                    </div>

                                    </div>
                                  </div>
                                </div>

                              <div class="row">
                                <div class="col-lg-12 grid margin stretch-card">
                                  <div class="card">
                                  <div class="card-body">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                      <div class="card-heading">
                                        <h4 class="card-title"> Productos más vendidos</h4>
                                      </div>
                                  </div>
                                  </div>
                                  </div>
                                  </div>
                                </div>
                              </div>





                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('js/chart.js')); ?>"></script>
<script>
    // const myChart = new Chart(ctx, {...});
    $(function(){
      var varCompra = document.getElementById('compras').getContext('2d');

        var charCompra  = new Chart(varCompra,{
          type: 'line',
          data:{
              labels:[<?php foreach ($comprasmes as $reg)
                { 
                  setLocale(LC_TIME,'es_ES','Spanish_Spain','Spanish');
                  $mes_traducido = strftime('%B',strtotime($reg->mes));
                  echo'"'. $mes_traducido.'",';
                }?>],
                datasets:[{
                  label: 'Compras',
                  data: [<?php foreach ($comprasmes as $reg)
                    {echo''.$reg->totalmes.',';}?>],
                    borderColor: 'rgba(255,99,132,1)',
                    borderWith:3
                }]

          },
          options:{
            scales:{
              yAxes:[{
                ticks:{
                  beginAtZero:true
                }
              }]
            }

          }


        });

        var varVenta = document.getElementById('ventas').getContext('2d');

        var charVenta  = new Chart(varVenta,{
          type: 'line',
          data:{
              labels:[<?php foreach ($ventasmes as $reg)
                { 
                  setLocale(LC_TIME,'es_ES','Spanish_Spain','Spanish');
                  $mes_traducido = strftime('%B',strtotime($reg->mes));
                  echo'"'. $mes_traducido.'",';
                }?>],
                datasets:[{
                  label: 'Ventas',
                  data: [<?php foreach ($ventasmes as $reg)
                    {echo''.$reg->totalmes.',';}?>],
                    backgroundColor: 'rgba(20,204,20,1)',
                    borderColor: 'rgba(54,162,235,0.2)',
                    borderWith:1
                }]

          },
          options:{
            scales:{
              yAxes:[{
                ticks:{
                  beginAtZero:true
                }
              }]
            }
          }

        });

var varVentaDiarias = document.getElementById('ventas_diarias').getContext('2d');
  var charVentaDiarias  = new Chart(varVentaDiarias,{
  type: 'bar',
  data:{
      labels:[<?php foreach ($ventasdia as $ventadia)
        { 
          $dia = $ventadia->dia;
          echo'"'. $dia.'",';
        }?>],
        datasets:[{
          label: 'Ventas',
          data: [<?php foreach ($ventasdia as $reg)
            {echo''.$reg->totaldia.',';}?>],
           backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
        }]

  },
  options:{
    scales:{
      yAxes:[{
        ticks:{
          beginAtZero:true
        }
      }]
    }

  }


});
      });
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/home.blade.php ENDPATH**/ ?>