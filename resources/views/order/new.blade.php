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

@section('title', 'Crear una orden de compra')

@section('content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title"> Crear Orden de Compra
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
                                            <input type="text" class="form-control" placeholder="Efectivo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <!-- BEGIN AJAX ORDER DETAIL -->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-red-sunglo">
                                                <i class="icon-settings font-red-sunglo"></i>
                                                <span class="caption-subject bold uppercase"> Detalle de la orden de compra</span>
                                                <br/>
                                                <small>Seleccione un producto por nombre y presione el boton 'Agregar Producto'</small>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-toolbar">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <select id="product_list" name="product_list" class="bs-select form-control" data-live-search="true" data-size="8">
                                                                <option value="0" disabled selected>Seleccionar un producto...</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="btn-group">
                                                            <button id="sample_editable_1_new" class="btn sbold green"> Agregar Producto
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                <thead>
                                                <tr>
                                                    <th> Producto </th>
                                                    <th> Presentacion </th>
                                                    <th> Marca </th>
                                                    <th> Referencia </th>
                                                    <th> Precio con IVA </th>
                                                    <th> Cantidad </th>
                                                    <th> Acciones </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="odd gradeX">
                                                    <td> shuxer </td>
                                                    <td> Shuxer presentacion </td>
                                                    <td> Marca Shuxer </td>
                                                    <td> Referencia Shuxer </td>
                                                    <td> $ 123.456,78 </td>
                                                    <td> <input type="text" class="form-control input-xsmall" name="order_customer_name"> </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-docs"></i> New Post </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-tag"></i> New Comment </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-user"></i> New User </a>
                                                                </li>
                                                                <li class="divider"> </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-flag"></i> Comments
                                                                        <span class="badge badge-success">4</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END AJAX ORDER DETAIL -->
                                </div>
                                <div class="form-actions">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn blue">Submit</button>
                                        <button type="button" class="btn red">Cancel</button>
                                    </div>
                                </div>
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
            $.get('{{ url('dash') }}/products/ajax-light-list', function(data) {
                $.each(data, function(index,prod){
                    $('#product_list').append($('<option>', {
                        value: prod.id,
                        text : prod.title
                    }));
                });
            });
        });
        $('#btncleantb').click(function(){
            $('#tbBodyDetail').empty();
        });
        $(document).on('click', 'button', function () {
            var subid = this.id;
            subid = subid.substring(0,8);
            if(subid = 'btnclean'){
                $(this).closest("tr").remove();
            }
        });
        $('#btnaddrow').click(function(){
            var product_id = $("#product_list option:selected").val();
            $.get('{{ url('dash') }}/products/ajax-product-by-id?product=' + product_id, function(data) {
                var trHTML = '';
                $.each(data, function (i, item) {
                    trHTML +='<tr  class="odd gradeX">' +
                            '<td>'+ item.title +'</td>' +
                            '<td>'+ item.presentation +'</td>' +
                            '<td>'+ item.brand +'</td>' +
                            '<td>'+ item.price +'</td>' +
                            '<td>'+ '<input type="text" class="form-control input-xsmall" name="order_customer_name">' +'</td>' +
                            '<td>'+ '<div class="btn-group"> <button class="btn btn-xs purple-plum" type="button" id="btnclean'+ item.id +'" > Eliminar <i class="fa fa-minus"></i> </button> </div>' +'</td>' +
                            '</tr>';
                });
                $('#tbBodyDetail').append(trHTML);
            });
        });
    </script>
@endsection