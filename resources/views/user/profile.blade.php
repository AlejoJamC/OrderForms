@extends('layouts.admin')

@section('css')
    <link href="{{ URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/pages/css/profile.min.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('title', 'Historial de las ordenes de compra')

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title"> Perfil del Usuario
                <small>Todos los campos son requeridos</small>
            </h3>
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet ">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src="{{ URL::asset($user_data{0}->picture) }}" class="img-responsive" alt=""> </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="javascript:;">
                                            <i class="icon-settings"></i> Configuraciones de la cuenta </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                        <!-- END PORTLET MAIN -->
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light ">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Detalles</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">Información</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_2" data-toggle="tab">Cambiar Imagen</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">Cambiar Contrase&ntilde;a</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <form role="form" action="#">
                                                    <div class="form-group">
                                                        <label class="control-label">Razon Social</label>
                                                        <input type="text" placeholder="John" class="form-control"  value="{{$user_data{0}->business_name}}"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">NIT</label>
                                                        <input type="text" placeholder="Doe" class="form-control" value="{{$user_data{0}->identification}}"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Contacto</label>
                                                        <input type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control" value="{{$user_data{0}->contact}}"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" placeholder="Design, Web etc." class="form-control" value="{{$user_data{0}->email}}"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Direcci&oacute;n</label>
                                                        <input type="text" placeholder="Design, Web etc." class="form-control" value="{{$user_data{0}->address}}"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Departamento</label>
                                                        <select class="bs-select form-control" data-live-search="true" data-size="8" id="state" name="state_id">
                                                            <option value="0" disabled selected>Seleccionar...</option>
                                                            @foreach ($states as $state_id => $state)
                                                                @if($state_id == $user_data{0}->state_id)
                                                                    <option value="{{ $state_id }}" selected>{{ $state }}</option>
                                                                @else
                                                                    <option value="{{ $state_id }}">{{ $state }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Ciudad</label>
                                                        <select class="bs-select form-control" data-live-search="true" data-size="8" id="city" name="city_id">
                                                            <option value="0" disabled selected>Seleccionar...</option>
                                                            @foreach ($cities as $city_id => $city)
                                                                @if($city_id == $user_data{0}->city_id)
                                                                    <option value="{{ $city_id }}" selected>{{ $city }}</option>
                                                                @else
                                                                    <option value="{{ $city_id }}">{{ $city }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="margiv-top-10">
                                                        <a href="javascript:;" class="btn green"> Guardar Cambios </a>
                                                        <a href="javascript:;" class="btn red"> Cancelar </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->
                                            <!-- CHANGE AVATAR TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                <p> La imagen corporativa o el logo de la empresa/cliente es obligatorio. </p>
                                                <form action="#" role="form">
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Select image </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="..."> </span>
                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix margin-top-10">
                                                            <span class="label label-danger">Nota! </span>
                                                            <span>la imagen adjunta se apoya en las últimas versiones de Firefox, Chrome, Opera, Safari e Internet Explorer 10 unicamente.</span>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <a href="javascript:;" class="btn green"> Cargar </a>
                                                        <a href="javascript:;" class="btn red"> Cancelar </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE AVATAR TAB -->
                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label class="control-label">Contrase&ntilde;a actual</label>
                                                        <input type="password" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Nueva contrase&ntilde;a</label>
                                                        <input type="password" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Repetir nueva Contrase&ntilde;a</label>
                                                        <input type="password" class="form-control" /> </div>
                                                    <div class="margin-top-10">
                                                        <a href="javascript:;" class="btn green"> Cambiar Contrase&ntilde;a </a>
                                                        <a href="javascript:;" class="btn red"> Cancelar </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE PASSWORD TAB -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection

@section('js')
    <script src="{{ URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/pages/scripts/profile.min.js') }}" type="text/javascript"></script>
    <script>
        $('#state').on('change', function(e){
            console.log(e);
            var state_id = e.target.value;
            $.get('{{ url('dash') }}/users/new/ajax-city?state_id=' + state_id, function(data) {
                console.log(data);
                $('#city').empty();
                $('#city').append($('<option disabled selected value="0">Seleccionar ...</option>'));
                $.each(data, function(index,cities){
                    $('#city').append($('<option>', {
                        value: cities.id,
                        text : cities.name
                    }));
                });
            });
        });
    </script>
@endsection