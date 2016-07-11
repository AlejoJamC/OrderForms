@section('sidebar')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed  " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start active open">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Historial</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start active open">
                        <a href="/admin" class="nav-link ">
                            <span class="title">Nombre Empresa</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/admin" class="nav-link ">
                            <span class="title">Todos los Clientes</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-basket-loaded"></i>
                    <span class="title">Pedidos</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="/admin" class="nav-link ">
                            <span class="title">Crear</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/admin" class="nav-link ">
                            <span class="title">Modificar</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-social-dropbox"></i>
                    <span class="title">Productos</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="/admin" class="nav-link ">
                            <span class="title">Lista</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/admin" class="nav-link ">
                            <span class="title">Modificar</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/admin" class="nav-link ">
                            <span class="title">Cargar</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user-follow"></i>
                    <span class="title">Usuarios</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="/admin" class="nav-link ">
                            <span class="title">Lista</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/admin" class="nav-link ">
                            <span class="title">Crear</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/admin" class="nav-link ">
                            <span class="title">Recuperar Contrase&ntilde;a</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
@show