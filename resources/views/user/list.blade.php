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

@section('title', 'Historial de las ordenes de compra')

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title"> Lista de Usuarios
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
                        <span>Lista</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            @if(Auth::user()->role_id == 3)
                <div class="alert alert-warning">
                    <strong>Advertencia!</strong> Este perfil es de solo navegaci&oacute;n.
                </div>
        @endif
            <!-- BEGIN AJAX DATATABLE-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-social-dribbble font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Todas los usuarios son administrables</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable">
                                <table class="table table-hover" id="tbhistoy" name="tbproducts">
                                    <thead>
                                    <tr role="row" class="heading">
                                        <th width="1%"></th>
                                        <th width="10%"> Razon Social </th>
                                        <th width="200"> NIT </th>
                                        <th width="200"> Nombre de Usuario </th>
                                        <th width="25%"> Contacto </th>
                                        <th width="15%"> Email </th>
                                        <th width="15%"> Direcci&oacute;n </th>
                                        @if( Auth::user()->role_id == 2 )
                                            <th width="15%"> Acciones </th>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody id="tbodyProducts">
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
            $.get('{{ url('dash') }}/users/ajax-list', function(data) {
                $('#tbodyProducts').empty();
                var trHTML = '';
                var aRow = '';
                $.each(data, function (i, item) {
                    @if( Auth::user()->role_id == 2 )
                        aRow = '<td>'+ '<a href="{{url('dash')}}/users/detail/'+ item.id + '" class="btn btn-sm btn-outline dark"><i class="fa fa-edit"></i> Modificar</a>' +'</td>';
                    @endif
                    trHTML +='<tr>' +
                            '<td></td>' +
                            '<td>'+ item.business_name +'</td>' +
                            '<td>'+ item.identification +'</td>' +
                            '<td>'+ item.username +'</td>' +
                            '<td>'+ item.contact +'</td>' +
                            '<td>'+ item.email +'</td>' +
                            '<td>'+ item.address +'</td>' +
                            aRow +
                            '</tr>';
                });
                $('#tbodyProducts').append(trHTML);
            });
        });

    </script>
@endsection