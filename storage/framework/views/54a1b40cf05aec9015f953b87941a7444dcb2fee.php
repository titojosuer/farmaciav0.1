<li class="nav-item <?php echo e(Request::is('home*') ? 'active' : ''); ?>">
  <a class="nav-link" href="<?php echo e(route('home')); ?>">
    <i class="nav-icon icon-screen-desktop"></i>
    <span>Dashboard</span>
  </a>
</li>

<li class="nav-item <?php echo e(Request::is('users*') ? 'active' : ''); ?>">
  <a class="nav-link" href="<?php echo e(route('users.index')); ?>">
    <i class="nav-icon icon-user"></i>
    <span>Usuarios</span>
  </a>
</li>
<li class="nav-item <?php echo e(Request::is('clientes*') ? 'active' : ''); ?>">
    <a class="nav-link" href="<?php echo e(route('clientes.index')); ?>">
        <i class="nav-icon icon-user-follow"></i>
        <span>Clientes</span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('proveedores*') ? 'active' : ''); ?>">
    <a class="nav-link" href="<?php echo e(route('proveedores.index')); ?>">
        <i class="nav-icon icon-people"></i>
        <span>Proveedores</span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('categorias*') ? 'active' : ''); ?>">
  <a class="nav-link" href="<?php echo e(route('categorias.index')); ?>">
        <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
        <span>Categorias</span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('laboratorios*') ? 'active' : ''); ?>">
  <a class="nav-link" href="<?php echo e(route('laboratorios.index')); ?>">
        <i class="nav-icon fa fa-flask" aria-hidden="true"></i>
        <span>Laboratorios</span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('productos*') ? 'active' : ''); ?>">
    <a class="nav-link" href="<?php echo e(route('productos.index')); ?>">
        <i class="nav-icon fa fa-product-hunt" aria-hidden="true"></i>
        <span>Productos</span>
    </a>
</li>
<li class="nav-item <?php echo e(Request::is('pedidos') ? 'active' : ''); ?>">
    <a class="nav-link" href="<?php echo e(route('pedidos.index')); ?>">
        <i class="nav-icon fa fa-shopping-cart" aria-hidden="true"></i>
        <span>Pedidos</span>
    </a>
</li>


<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#page_layouts" aria-expanded="true" aria-controls="page_layouts">
  <i class="nav-icon fa fa-credit-card-alt" aria-hidden="true"></i>
    <span class="menu-title">Facturacion</span>
  </a>
  <div class="collapse" id="page_layouts">
     <ul class="nav flex-column sub-menu">
       <li class="nav-item <?php echo e(Request::is('Ventas*') ? 'active' : ''); ?>">
           <a class="nav-link" href="<?php echo e(route('ventas.index')); ?>">
               <i class="nav-icon fa fa-money" aria-hidden="true"></i>
               <span>Ventas</span>
           </a>
       </li>
       <li class="nav-item <?php echo e(Request::is('regimenTributario*') ? 'active' : ''); ?>">
           <a class="nav-link" href="<?php echo e(route('regimenTributario.index')); ?>">
               <i class="nav-icon fa fa-money" aria-hidden="true"></i>
               <span>Regimen Tributario</span>
           </a>
       </li>
    </ul>
  </div>
 </li>


 <li class="nav-item">
   <a class="nav-link" data-toggle="collapse" href="#page_layouts2" aria-expanded="true" aria-controls="page_layouts">
   <i class="nav-icon fa fa-users" aria-hidden="true"></i>
     <span class="menu-title">Roles y Permisos</span>
   </a>
   <div class="collapse" id="page_layouts2">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item <?php echo e(Request::is('permissions*') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('permissions.index')); ?>">
                <i class="nav-icon icon-people"></i>
                <span>Permisos</span>
            </a>
        </li>
        <li class="nav-item <?php echo e(Request::is('roles*') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('roles.index')); ?>">
                <i class="nav-icon icon-people"></i>
                <span>Roles</span>
            </a>
        </li>
     </ul>
   </div>
  </li>







<!--
<li class="nav-item <?php echo e(Request::is('facturas*') ? 'active' : ''); ?>">
    <a class="nav-link" href="<?php echo e(route('facturas.index')); ?>">
        <i class="nav-icon icon-cursor"></i>
        <span>Facturas</span>
    </a>
</li> -->

<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#page_layouts3" aria-expanded="true" aria-controls="page_layouts">
  <i class="nav-icon fa fa-cog" aria-hidden="true"></i>
    <span class="menu-title">Configuración</span>
  </a>
  <div class="collapse" id="page_layouts3">
     <ul class="nav flex-column sub-menu">
       <li class="nav-item <?php echo e(Request::is('empresas*') ? 'active' : ''); ?>">
           <a class="nav-link" href="<?php echo e(route('empresas.index')); ?>">
               <i class="nav-icon fa fa-money" aria-hidden="true"></i>
               <span>Empresa</span>
           </a>
       </li>
       <li class="nav-item <?php echo e(Request::is('impresora*') ? 'active' : ''); ?>">
           <a class="nav-link" href="<?php echo e(route('impresora.index')); ?>">
               <i class="nav-icon fa fa-money" aria-hidden="true"></i>
               <span>Impresora</span>
           </a>
       </li>


    </ul>
  </div>
 </li>
<?php /**PATH /home/titojosuer/Descargas/far/protected-lowlands-54743/resources/views/layouts/menu.blade.php ENDPATH**/ ?>