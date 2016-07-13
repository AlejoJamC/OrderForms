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
                    <!-- Begin: life time stats -->
                    <div class="portlet light portlet-fit portlet-datatable ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">Todas las ordenes de todos los usuarios</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-container">
                                <div class="table-actions-wrapper">
                                    <span> </span>
                                    <select class="table-group-action-input form-control input-inline input-small input-sm">
                                        <option value="">Seleccionar...</option>
                                        @foreach ($order_states as $order_states_id => $order_state)
                                            <option value="{{ $order_states_id }}">{{ $order_state }}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-sm green table-group-action-submit">
                                        <i class="fa fa-check"></i> Filtrar</button>
                                </div>
                                <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_ajax">
                                    <thead>
                                    <tr role="row" class="heading">
                                        <th width="1%"></th>
                                        <th width="10%"> ID Orden# </th>
                                        <th width="200"> Cliente </th>
                                        <th width="25%"> Fecha Creaci&oacute;n </th>
                                        <th width="15%"> Estado </th>
                                        <th width="15%"> Acciones </th>
                                    </tr>
                                    <tr role="row" class="filter">
                                        <td> </td>
                                        <td>
                                            <input type="text" class="form-control form-filter input-sm" name="order_id">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-filter input-sm" name="order_customer_name">
                                        </td>
                                        <td>
                                            <div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
                                                <input type="text" class="form-control form-filter input-sm" readonly name="order_date_from" placeholder="From">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-sm default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                            <div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
                                                <input type="text" class="form-control form-filter input-sm" readonly name="order_date_to" placeholder="To">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-sm default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </td>
                                        <td>
                                            <select name="order_status" class="form-control form-filter input-sm">
                                                <option value="">Seleccionar...</option>
                                                @foreach ($order_states as $order_states_id => $order_state)
                                                    <option value="{{ $order_states_id }}">{{ $order_state }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <div class="margin-bottom-5">
                                                <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                                    <i class="fa fa-search"></i> Filtrar</button>
                                            </div>
                                            <button class="btn btn-sm red btn-outline filter-cancel">
                                                <i class="fa fa-times"></i> Reiniciar</button>
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td>
                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                    <input name="id[]" type="checkbox" class="checkboxes" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="sorting_1">1</td>
                                            <td>Jhon Doe</td>
                                            <td>12/09/2013</td>
                                            <td>
                                                <span class="label label-sm label-success">Pending</span>
                                            </td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-sm btn-outline grey-salsa"><i class="fa fa-search"></i> View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End: life time stats -->
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
    <script src="{{ URL::asset('js/table-datatables-ajax-custom.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection