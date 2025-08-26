<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <!-- Title -->
        <title>@yield('title') | Unify</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('build/assets/img/icons/favicon.ico') }}">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,400i,500,700%7CAlegreya:400"
            rel="stylesheet">

        <!-- CSS Global Compulsory -->
        <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/bootstrap/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/icon-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/icon-line-pro/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/icon-hs/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/icon-material/material-icons.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/animate.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/hamburgers/hamburgers.min.css') }}">

        @yield('css')

        <!-- CSS Unify Theme -->
        <link rel="stylesheet" href="{{ URL::asset('build/assets/css/styles.multipage-education.css') }}">

        <!-- CSS Customization -->
        <link rel="stylesheet" href="{{ URL::asset('build/assets/css/custom.css') }}">
    </head>

    <body>
        <main>

            @include('layouts.website.web-header')

            @yield('content')

            @include('layouts.website.web-call-to-action')

            @include('layouts.website.web-footer')

        </main>

        <!-- JS Global Compulsory -->
        <script src="{{ URL::asset('build/assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('build/assets/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
        <script src="{{ URL::asset('build/assets/vendor/popper.min.js') }}"></script>
        <script src="{{ URL::asset('build/assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

        @yield('script')

    </body>

</html>
