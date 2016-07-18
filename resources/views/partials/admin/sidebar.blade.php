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
                    @if( Auth::user()->role_id != 3)
                    <li class="nav-item start {{ Request::is('dash/history/me') ? ' active open ' : '' }}">
                        <a href="/dash/history/me" class="nav-link ">
                            <span class="title">{{ Auth::user()->business_name }}</span>
                            <span {{ Request::is('dash/history/me') ?  ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                    @endif
                    @if( Auth::user()->role_id != 1)
                    <li class="nav-item start {{ Request::is('dash/history/all') ? ' active open ' : '' }}">
                        <a href="/dash/history/all" class="nav-link ">
                            <span class="title">Todos los Clientes</span>
                            <span {{ Request::is('dash/history/me') ? ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                    @endif
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
                    @if( Auth::user()->role_id != 1)
                    <li class="nav-item start {{ Request::is('dash/products/new') ? ' active open ' : '' }}">
                        <a href="/dash/products/new" class="nav-link ">
                            <span class="title">Crear</span>
                            <span {{ Request::is('dash/products/new') ? ' class=selected ' : '' }}></span>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>
            @if( Auth::user()->role_id != 1)
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
                </ul>
            </li>
            @endif
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
@show