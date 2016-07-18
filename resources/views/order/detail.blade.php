@extends('layouts.admin')

@section('css')
    <link href="{{ URL::asset('assets/global/plugins/datatables/datatables.min.css" rel="stylesheet') }}" type="text/css" />
    <link href="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .no-bottom{
            margin-bottom: 0px;
        }
    </style>
@stop

@section('title', 'Detalle de la Orden de compra # '. $order_header{0}->id)

@section('content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title"> Orden de Compra
                <small>Solo navegación</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-screen-desktop"></i>
                        <a href="/dash">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Ordenes de compra</span>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Detalle</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN ORDER HEADER -->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject bold uppercase"> Cabecera de la Orden de Compra</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form">
                                <div class="form-body">
                                    <div class="form-group  col-md-6 no-bottom">
                                        <label>Razon Social</label>
                                        <ul class="list-group no-bottom ">
                                            <li class="list-group-item list-group-item-default"> {{ $order_header{0}->business_name }}</li>
                                        </ul>
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Identificacion</label>
                                        <ul class="list-group no-bottom ">
                                            <li class="list-group-item list-group-item-default"> {{ $order_header{0}->identification }}</li>
                                        </ul>
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Contacto</label>
                                        <ul class="list-group no-bottom ">
                                            <li class="list-group-item list-group-item-default"> {{ $order_header{0}->contact }}</li>
                                        </ul>
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Email</label>
                                        <ul class="list-group no-bottom ">
                                            <li class="list-group-item list-group-item-default"> {{ $order_header{0}->email }}</li>
                                        </ul>
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Direccion</label>
                                        <ul class="list-group no-bottom ">
                                            <li class="list-group-item list-group-item-default"> {{ $order_header{0}->address }}</li>
                                        </ul>
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Ciudad</label>
                                        <ul class="list-group no-bottom ">
                                            <li class="list-group-item list-group-item-default"> {{ $order_header{0}->city }}</li>
                                        </ul>
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Departamento</label>
                                        <ul class="list-group no-bottom ">
                                            <li class="list-group-item list-group-item-default"> {{ $order_header{0}->state }}</li>
                                        </ul>
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Forma de Pago</label>
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-money font-green"></i>
                                                    </span>
                                            <ul class="list-group no-bottom ">
                                                <li class="list-group-item list-group-item-default"> {{ $order_header{0}->way_to_pay }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group  col-md-3">
                                        <label>Estado de la Orden</label>
                                        @if( Auth::user()->role_id == 2)
                                            <select class="bs-select form-control" id="role" name="role">
                                                <option value="0" disabled selected>Seleccionar...</option>
                                                @foreach ($order_states as $order_state_id => $state)
                                                    @if($order_header{0}->order_state_id == $order_state_id )
                                                        <option value="{{ $order_state_id }}" selected>{{ $state }}</option>
                                                    @else
                                                        <option value="{{ $order_state_id }}">{{ $state }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @else
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-info"> {{ $order_header{0}->order_state }}</li>
                                            </ul>
                                        @endif
                                    </div>
                                    <div class="form-group  col-md-3">
                                        <label>Fecha de Creación</label>
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-default"> {{ date('d-m-Y', strtotime($order_header{0}->created_at)) }}</li>
                                        </ul>
                                    </div>
                                    <div class="form-group  "><label style="color:#fff">Acciones</label></div>
                                    <div class="form-group  "><label style="color:#fff">Acciones</label></div>
                                </div>
                                <div class="form-body">
                                    <!-- BEGIN AJAX ORDER DETAIL -->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-dark">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject bold uppercase"> Detalle de la orden de compra</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="tbOrderDetail">
                                                <thead>
                                                <tr>
                                                    <th> Producto </th>
                                                    <th> Presentacion </th>
                                                    <th> Marca </th>
                                                    <th> Precio sin IVA </th>
                                                    <th> Cantidad </th>
                                                </tr>
                                                </thead>
                                                <tbody id="tbodyDetail">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END AJAX ORDER DETAIL -->
                                </div>
                                @if(Auth::user()->role_id == 2)
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
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
                                @endif
                            </form>
                        </div>
                    </div>
                    <!-- END ORDER HEADER -->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
@endsection

@section('js')
    <script src="{{ URL::asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/pages/scripts/table-datatables-managed.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/pages/scripts/components-bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function() {
            $.get('{{ url('dash') }}/details/ajax-order?order_id=' + '{{ $order_header{0}->id }}', function(data) {
                console.log(data);
                $('#tbodyDetail').empty();
                var trHTML = '';
                $.each(data, function (i, item) {
                    trHTML +='<tr class="odd gradeX">' +
                            '<td>'+ item.title +'</td>' +
                            '<td>'+ item.presentation +'</td>' +
                            '<td>'+ item.brand +'</td>' +
                            '<td>$'+ item.price +'</td>' +
                            '<td>'+ item.quantity +'</td>' +
                            '</tr>';
                });
                $('#tbodyDetail').append(trHTML);
            });
        });
    </script>
@endsection