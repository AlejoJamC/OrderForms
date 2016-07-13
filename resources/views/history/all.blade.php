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
        function pad(num, size) {
            var s = num+"";
            while (s.length < size) s = "0" + s;
            return s;
        }

        jQuery(document).ready(function() {
            $.get('{{ url('dash') }}/history/ajax-all', function(data) {
                console.log(data);
                $('#tbodyhistory').empty();
                var flag ='';
                var trHTML = '';
                var dateFormat = '';
                $.each(data, function (i, item) {
                    // Choose flag style
                    switch (item.order_state_id){
                        case 1:
                            flag = '<span class="label label-sm label-info">' + item.order_state_name + '</span>';
                            break;
                        case 2:
                            flag = '<span class="label label-sm label-warning">' + item.order_state_name + '</span>';
                            break;
                        case 3 :
                            flag = '<span class="label label-sm label-success">' + item.order_state_name + '</span>';
                            break;
                        case 4 :
                            flag = '<span class="label label-sm label-danger">' + item.order_state_name + '</span>';
                            break;
                        default:
                            flag = '<span class="label label-sm label-default">' + item.order_state_name + '</span>';
                            break;

                    }
                    // Get date
                    dateFormat = moment(item.created_at).format('DD/MM/YYYY');

                    trHTML +='<tr>' +
                            '<td></td>' +
                            '<td>'+ item.id +'</td>' +
                            '<td>'+ item.business_name +'</td>' +
                            '<td>'+ dateFormat +'</td>' +
                            '<td>'+ flag +'</td>' +
                            '<td>'+ '<a href="{{url('dash')}}/orders/'+ item.id + '" class="btn btn-sm btn-outline dark"><i class="fa fa-search"></i> Ver detalle</a>' +'</td>' +
                            '</tr>';
                });
                $('#tbodyhistory').append(trHTML);
            });
        });

    </script>
@endsection