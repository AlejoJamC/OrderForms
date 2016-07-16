@extends('layouts.admin')

@section('css')
    <link href="{{URL::asset('assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('title', 'Registrar usuario')

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title"> Registrar usuarios
                <small>Todos los campos son requeridos.</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-screen-desktop"></i>
                        <a href="/dash">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Usuarios</span>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Crear</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            @if(Auth::user()->role_id == 3)
                <div class="alert alert-warning">
                    <strong>Advertencia!</strong> Este perfil es de solo navegaci&oacute;n.
                </div>
            @endif
            <div class="row">
                <div class="col-md-2 "></div>
                <div class="col-md-8 ">
                    <!-- BEGIN REGISTER USER FORM -->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">Complete la información del siguiente formulario:</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Razon Social</label>
                                        <div class="col-md-9">
                                            <input type="text" id="business_name" name="business_name" class="form-control" placeholder="Nombre completo de la empresa">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">NIT</label>
                                        <div class="col-md-9">
                                            <input type="text" id="identification" name="identification" class="form-control" placeholder="N&uacute;mero de Identificaci&oacute;n Tributaria">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contacto</label>
                                        <div class="col-md-9">
                                            <input type="text" id="contact" name="contact" class="form-control" placeholder="Nombre de la persona de contacto">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope font-blue"></i>
                                                        </span>
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Direcci&oacute;n de email"> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Direcci&oacute;n</label>
                                        <div class="col-md-9">
                                            <input type="text" id="address" name="address" class="form-control" placeholder="Direcci&oacute;n principal">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Departamento</label>
                                        <div class="col-md-9">
                                            <select class="bs-select form-control" data-live-search="true" data-size="8" id="state" name="state_id">
                                                <option value="0" disabled selected>Seleccionar...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Ciudad</label>
                                        <div class="col-md-9">
                                            <select class="bs-select form-control" data-live-search="true" data-size="8" id="city" name="city_id">
                                                <option value="0" disabled selected>Seleccionar...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Logo de la empresa</label>
                                        <div class="col-md-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="input-group input-large">
                                                    <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                        <i class="fa fa-file-image-o fileinput-exists"></i>&nbsp;
                                                        <span class="fileinput-filename"></span>
                                                    </div>
                                                            <span class="input-group-addon btn default btn-file">
                                                                <span class="fileinput-new"> Seleccionar archivo </span>
                                                                <span class="fileinput-exists"> Cambiar </span>
                                                                <input type="file" id="picture" name="picture"> </span>
                                                    <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Eliminar </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nombre de Usuario</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-user font-blue"></i>
                                                        </span>
                                                <input type="text" id="username" name="username" class="form-control" placeholder="NombreDeUsuarioUnico"> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contrase&ntilde;a</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-exclamation-triangle font-blue"></i>
                                                </span>
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Rol</label>
                                        <div class="col-md-9">
                                            <select class="bs-select form-control" id="role" name="role">
                                                <option value="0" disabled selected>Seleccionar...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            @if(Auth::user()->role_id == 3)
                                                <button type="submit" class="btn blue" disabled>Guardar</button>
                                                <a href="{{ url('dash/products/new') }}" class="btn red" disabled>Cancelar</a>
                                            @else
                                                <button type="submit" class="btn blue" id="btnsubmit" name="btnsubmit">Guardar</button>
                                                <a href="{{ url('dash/products/new') }}" class="btn red">Cancelar</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END REGISTER USER FORM -->
                </div>
                <div class="col-md-2 "></div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection

@section('js')
    <script src="{{URL::asset('assets/pages/scripts/components-bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script>
        $('#state').on('change', function(e){
            var state_id = e.target.value;
            $.get('{{ url('dash') }}/users/new/ajax-city?state_id=' + state_id, function(data) {
                $('#city').empty();
                $('#city').append($('<option>', {
                    value: 0,
                    text : "Seleccionar..."
                }));
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