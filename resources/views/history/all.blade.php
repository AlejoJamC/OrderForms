@extends('layouts.admin')

@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS-->
    <link href="{{ URL::asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN AJAX STYLES -->
    <link href="{{ URL::asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END AJAX STYLES -->
@stop

@section('title', 'Historial todas las ordenes de compra')

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title"> Lista de Ordenes
                <small>Utilice los filtro de la cabecera de la tabla para filtar la informaci&oacute;n</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-screen-desktop"></i>
                        <a href="/dash">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Historial de Ordenes</span>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Todas</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN AJAX DATATABLE-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-social-dribbble font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Todas las ordenes de todos los usuarios</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable">
                                <table class="table table-hover" id="tbhistoy" name="tbhistoy">
                                    <thead>
                                    <tr role="row" class="heading">
                                        <th width="1%"></th>
                                        <th width="10%"> ID Orden# </th>
                                        <th width="200"> Cliente </th>
                                        <th width="25%"> Fecha Creaci&oacute;n </th>
                                        <th width="15%"> Estado </th>
                                        <th width="15%"> Acciones </th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbodyhistory">
                                    <tr role="row" class="odd">
                                        <td></td>
                                        <td class="sorting_1">1</td>
                                        <td>Jhon Doe</td>
                                        <td>12/09/2013</td>
                                        <td>
                                            <span class="label label-sm label-success">Pending</span>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-sm btn-outline grey-salsa"><i class="fa fa-search"></i> Ver detalle</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END AJAX DATATABLE-->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection

@section('js')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ URL::asset('assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ URL::asset('assets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        $('#state').on('change', function(e){
            console.log(e);
            var state_id = e.target.value;

            $.get('{{ url('dash') }}/history/ajax-all?user_id=' + user_id, function(data) {
                console.log(data);
                $('#tbhistoy').empty();
                $('#tbhistoy').append($('<option>', {
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

        jQuery(document).ready(function() {
            $.get('{{ url('dash') }}/history/ajax-all', function(data) {
                console.log(data);
                $('#tbodyhistory').empty();
                $.each(data, function(index,histories){

                });
            });
        });

    </script>
@endsection