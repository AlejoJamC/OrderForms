@extends('layouts.main')

@section('title', 'Gesti&oacute;n de Ordenes de Compra')

@section('content')
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset">
                <div class="login-bg" style="background-image:url(assets/pages/img/login/bg1.jpg)">
                    <img class="login-logo" src="assets/pages/img/login/logo.png" /> </div>
            </div>
            <div class="col-md-6 login-container bs-reset">
                <div class="login-content">
                    <h1>Metronic Admin Login</h1>
                    <p> Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p>
                    <form action="javascript:;" class="login-form" method="post">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <span>Enter any username and password. </span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username" name="username" required/> </div>
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" required/> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="rem-password">
                                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" name="remember" value="1" /> Remember me
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-8 text-right">
                                <div class="forgot-password">
                                    <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                                </div>
                                <button class="btn green" type="submit">Sign In</button>
                            </div>
                        </div>
                    </form>
                    <!-- BEGIN FORGOT PASSWORD FORM -->
                    <form class="forget-form" action="javascript:;" method="post">
                        <h3 class="font-green">Forgot Password ?</h3>
                        <p> Enter your e-mail address below to reset your password. </p>
                        <div class="form-group">
                            <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                        <div class="form-actions">
                            <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                            <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                        </div>
                    </form>
                    <!-- END FORGOT PASSWORD FORM -->
                </div>
                <!-- BEGIN FOOTER -->
            @include('partials.main.footer')
            <!-- END FOOTER -->
            </div>
        </div>
    </div>
@endsection
