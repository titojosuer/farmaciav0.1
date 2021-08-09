<li class="nav-item {{ Request::is('clientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('clientes.index') }}">
        <i class="nav-icon icon-people"></i>
        <span>Clientes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('productos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Productos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('proveedores*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('proveedores.index') }}">
        <i class="nav-icon icon-people"></i>
        <span>Proveedores</span>
    </a>
</li>
<li class="nav-item {{ Request::is('tipoUsuarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tipoUsuarios.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Tipo Usuarios</span>
    </a>
</li>
<li class="nav-item {{ Request::is('compras/pedidos') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('compras/pedidos') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Pedidos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('facturas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('facturas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Facturas</span>
    </a>
</li>
