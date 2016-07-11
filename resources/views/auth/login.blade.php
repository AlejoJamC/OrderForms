@extends('layouts.main')

@section('title', 'Gesti&oacute;n de Ordenes de Compra')

@section('content')
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset">
                <div class="login-bg" style="background-image:url(assets/pages/img/login/bg1.jpg)">
                    <img class="login-logo" src="assets/pages/img/login/unicontacto.png" /> </div>
            </div>
            <div class="col-md-6 login-container bs-reset">
                <div class="login-content">
                    <h1>Gesti&oacute;n de Ordenes de Compra</h1>
                    <p> Falta esta descripcion- Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p>
                    <form action="javascript:;" class="login-form" method="post">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <span>Se requiere nombre de usuario y contrase&ntilde;a. Por favor, revisa e int&eacute;ntalo de nuevo.</span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Nombre de usuario" name="username" required/> </div>
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Contrase&ntilde;a" name="password" required/> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8 text-right">
                                <button class="btn green" type="submit">Iniciar sesi&oacute;n</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- BEGIN FOOTER -->
            @include('partials.main.footer')
            <!-- END FOOTER -->
            </div>
        </div>
    </div>
@endsection