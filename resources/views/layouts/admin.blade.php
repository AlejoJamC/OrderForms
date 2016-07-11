<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
@include('partials.admin.head')
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
@include('partials.admin.header')
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    @include('partials.admin.sidebar')
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    @yield('content')
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    @include('partials.admin.quicksidebar')
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('partials.admin.footer')
<!-- END FOOTER -->
<!-- BEGIN SCRIPTS -->
@include('partials.admin.scripts')
<!-- END SCRIPTS -->
</body>

</html>