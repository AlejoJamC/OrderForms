@extends('layouts.admin')

@section('css')
    <link href="{{URL::asset('assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('title', 'Detalle producto')

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title"> Registrar un producto
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-screen-desktop"></i>
                        <a href="/dash">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Productos</span>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Crear</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            @if($errors->any())
                @if($errors->first() == 'true')
                    <div class="alert alert alert-success">
                        Se actualizo el producto <strong>correctamente!</strong>
                    </div>
                @else
                    <div class="alert alert-danger">
                        <strong>Error!</strong> No se pudo actualizar el producto, comuniquese con su administrador.
                    </div>
                @endif
            @endif
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
                            <form action="{{ url('/dash/products/details/'. $product_by_id{0}->id) }}" method="post" role="form" class="form-horizontal">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nombre</label>
                                        <div class="col-md-9">
                                            <input type="text" id="title" name="title" class="form-control" placeholder="producto" required value="{{ $product_by_id{0}->title }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Presentaci&oacute;n</label>
                                        <div class="col-md-9">
                                            <input type="text" id="presentation" name="presentation" class="form-control" placeholder="detalles" required value="{{ $product_by_id{0}->presentation }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Marca</label>
                                        <div class="col-md-9">
                                            <input type="text" id="brand" name="brand" class="form-control" placeholder="fabricante" required value="{{ $product_by_id{0}->brand }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Precio sin IVA</label>
                                        <div class="col-md-9">
                                            <input type="text" id="price" name="price" class="form-control" placeholder="valor antes de IVA" required value="{{ $product_by_id{0}->price }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Precio con IVA</label>
                                        <div class="col-md-9">
                                            <input type="text" id="price_with_tax" name="price_with_tax" class="form-control" placeholder="Valor con impuesto IVA" value="{{ $product_by_id{0}->price_with_tax }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Cantidad</label>
                                        <div class="col-md-9">
                                            <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Disponible" value="{{ $product_by_id{0}->quantity }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            @if(Auth::user()->role_id == 3 || Auth::user()->role_id == 1 )
                                                <button type="submit" class="btn blue" disabled>Actualizar</button>
                                                <a href="{{ url('dash/products/list') }}" class="btn red" disabled>Cancelar</a>
                                            @else
                                                <button type="submit" class="btn blue" id="btnsubmit" name="btnsubmit">Actualizar</button>
                                                <a href="{{ url('dash/products/list') }}" class="btn red">Cancelar</a>
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