@extends('layouts.main')

@section('title', 'Gesti&oacute;n de Ordenes de Compra')

@section('content')
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset">
                <div class="login-bg" style="background-image:url({{URL::asset('assets/pages/img/login/altbg1.jpg')}})">
                    <img class="login-logo" src="{{URL::asset('assets/pages/img/login/unicontacto.png')}}" /> </div>
            </div>
            <div class="col-md-6 login-container bs-reset">
                <div class="login-content">
                    <h1>Gesti&oacute;n de Ordenes de Compra</h1>
                    <p> Sistema de pedidos en línea de Jairo Osorio caballero (Unicontacto).</p>
                    @if(Session::has('msg'))
                        {{ Session::get('msg') }}
                    @endif
                    <form action="{{ url('/login') }}" class="login-form" method="post" role="form">
                        {{ csrf_field() }}
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <span>Se requiere nombre de usuario y contrase&ntilde;a. Por favor verifique la informaci&oacute;n e int&eacute;ntelo de nuevo.</span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Nombre de usuario" name="username" id="username" required/> </div>
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Contrase&ntilde;a" name="password"  id="password" required/> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="rem-password">
                                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" name="remember" value="1" {{ old('remember') ? ' checked' : '' }}/> Recordarme
                                        <span></span>
                                    </label>
                                </div>
                            </div>
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