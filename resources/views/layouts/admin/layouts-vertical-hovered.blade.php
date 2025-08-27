<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-layout-style="default"
    data-layout-position="fixed" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover"
    data-layout-width="fluid">

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

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('layouts.admin.topbar')
            @include('layouts.admin.sidebar')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <!-- Start content -->
                    <div class="container-fluid">
                        @yield('content')
                    </div> <!-- content -->
                </div>
                @include('layouts.admin.footer')
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        @include('layouts.admin.customizer')
        <!-- END Right Sidebar -->

        @include('layouts.admin.vendor-scripts')
    </body>

</html>
