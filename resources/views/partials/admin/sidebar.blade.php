@section('sidebar')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed  " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start {{ Request::is('dash/history/*') ? ' active open ' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-calendar"></i>
                    <span class="title">Historial de Ordenes</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ Request::is('dash/history/me') ? ' active open ' : '' }}">
                        <a href="/dash/history/me" class="nav-link ">
                            <span class="title">Nombre Empresa</span>
                            <span {{ Request::is('dash/history/me') ?  ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ Request::is('dash/history/all') ? ' active open ' : '' }}">
                        <a href="/dash/history/all" class="nav-link ">
                            <span class="title">Todos los Clientes</span>
                            <span {{ Request::is('dash/history/me') ? ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is('dash/orders/*') ? ' active open ' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-basket-loaded"></i>
                    <span class="title">Ordenes de Compra</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ Request::is('dash/orders/new') ? ' active open ' : '' }}">
                        <a href="/dash/orders/new" class="nav-link ">
                            <span class="title">Crear</span>
                            <span {{ Request::is('dash/orders/new') ? ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ Request::is('dash/orders/update') ? ' active open ' : '' }}">
                        <a href="/dash/orders/update" class="nav-link ">
                            <span class="title">Gestionar</span>
                            <span {{ Request::is('dash/orders/update') ? ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is('dash/products/*') ? ' active open ' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-social-dropbox"></i>
                    <span class="title">Productos</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ Request::is('dash/products/list') ? ' active open ' : '' }}">
                        <a href="/dash/products/list" class="nav-link ">
                            <span class="title">Lista</span>
                            <span {{ Request::is('dash/products/list') ? ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ Request::is('dash/products/update') ? ' active open ' : '' }}">
                        <a href="/dash/products/update" class="nav-link ">
                            <span class="title">Modificar</span>
                            <span {{ Request::is('dash/products/update') ? ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ Request::is('dash/products/load') ? ' active open ' : '' }}">
                        <a href="/dash/products/load" class="nav-link ">
                            <span class="title">Cargar</span>
                            <span {{ Request::is('dash/products/load') ? ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is('dash/users/*') ? ' active open ' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user-follow"></i>
                    <span class="title">Usuarios</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ Request::is('dash/users/list') ? ' active open ' : '' }}">
                        <a href="/dash/users/list" class="nav-link ">
                            <span class="title">Lista</span>
                            <span {{ Request::is('dash/users/list') ? ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ Request::is('dash/users/new') ? ' active open ' : '' }}">
                        <a href="/dash/users/new" class="nav-link ">
                            <span class="title">Crear</span>
                            <span {{ Request::is('dash/users/new') ? ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ Request::is('dash/users/reset/password') ? ' active open ' : '' }}">
                        <a href="/dash/users/reset/password" class="nav-link ">
                            <span class="title">Recuperar Contrase&ntilde;a</span>
                            <span {{ Request::is('dash/users/reset/password') ? ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
@show