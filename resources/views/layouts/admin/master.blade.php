<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark"
    data-sidebar-size="lg" data-sidebar-image="none" data-preloader="enable">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title') | WebSakola</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('build/images/icon-blue.png') }}">
        @include('layouts.admin.head-css')
    </head>

    @section('body')
        @include('layouts.admin.body')
    @show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.admin.topbar')
        @include('layouts.admin.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.admin.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    @include('layouts.admin.customizer')

    <!-- JAVASCRIPT -->
    @include('layouts.admin.vendor-scripts')
    </body>

</html>
