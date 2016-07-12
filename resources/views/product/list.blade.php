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
            <h3 class="page-title"> Dashboard
                <small>dashboard & statistics</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="/dash/history/me">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Dashboard</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <i class="icon-bell"></i> Action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-shield"></i> Another action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> Something else here</a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#">
                                    <i class="icon-bag"></i> Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN AJAX DATATABLE-->
            <div class="row">
                <div class="col-md-12">
                    <div class="note note-danger">
                        <p> NOTE: The below datatable is not connected to a real database so the filter and sorting is just simulated for demo purposes only. </p>
                    </div>
                    <!-- Begin: life time stats -->
                    <div class="portlet light portlet-fit portlet-datatable ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">Ajax Datatable</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-container">
                                <div class="table-actions-wrapper">
                                    <span> </span>
                                    <select class="table-group-action-input form-control input-inline input-small input-sm">
                                        <option value="">Select...</option>
                                        <option value="Cancel">Cancel</option>
                                        <option value="Cancel">Hold</option>
                                        <option value="Cancel">On Hold</option>
                                        <option value="Close">Close</option>
                                    </select>
                                    <button class="btn btn-sm green table-group-action-submit">
                                        <i class="fa fa-check"></i> Submit</button>
                                </div>
                                <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_ajax">
                                    <thead>
                                    <tr role="row" class="heading">
                                        <th width="2%">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th>
                                        <th width="5%"> Record&nbsp;# </th>
                                        <th width="15%"> Date </th>
                                        <th width="200"> Customer </th>
                                        <th width="10%"> Ship&nbsp;To </th>
                                        <th width="10%"> Price </th>
                                        <th width="10%"> Amount </th>
                                        <th width="10%"> Status </th>
                                        <th width="10%"> Actions </th>
                                    </tr>
                                    <tr role="row" class="filter">
                                        <td> </td>
                                        <td>
                                            <input type="text" class="form-control form-filter input-sm" name="order_id"> </td>
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
                                            <input type="text" class="form-control form-filter input-sm" name="order_customer_name"> </td>
                                        <td>
                                            <input type="text" class="form-control form-filter input-sm" name="order_ship_to"> </td>
                                        <td>
                                            <div class="margin-bottom-5">
                                                <input type="text" class="form-control form-filter input-sm" name="order_price_from" placeholder="From" /> </div>
                                            <input type="text" class="form-control form-filter input-sm" name="order_price_to" placeholder="To" /> </td>
                                        <td>
                                            <div class="margin-bottom-5">
                                                <input type="text" class="form-control form-filter input-sm margin-bottom-5 clearfix" name="order_quantity_from" placeholder="From" /> </div>
                                            <input type="text" class="form-control form-filter input-sm" name="order_quantity_to" placeholder="To" /> </td>
                                        <td>
                                            <select name="order_status" class="form-control form-filter input-sm">
                                                <option value="">Select...</option>
                                                <option value="pending">Pending</option>
                                                <option value="closed">Closed</option>
                                                <option value="hold">On Hold</option>
                                                <option value="fraud">Fraud</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="margin-bottom-5">
                                                <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                                    <i class="fa fa-search"></i> Search</button>
                                            </div>
                                            <button class="btn btn-sm red btn-outline filter-cancel">
                                                <i class="fa fa-times"></i> Reset</button>
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody> </tbody>
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
    <script src="{{ URL::asset('assets/pages/scripts/table-datatables-ajax.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection