<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/uca.min.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
<style>
    {{--.bg-login-image {--}}
        {{--background-position-x: 131px !important;--}}
        {{--background: url({{ asset('img/login2.jpg') }}) !important;--}}
        {{--background-position: center !important;--}}
        {{--background-size: 89% !important;--}}
        {{--background-repeat: no-repeat !important;--}}
        {{--padding-left: 59px !important;--}}
    {{--}--}}
    .bg-login-image {
        background-position-x: 131px;
        background: url({{ asset('img/login2.jpg') }}) !important;
        /* background-size: cover; */
        background-size: 79% !important;
        background-repeat: no-repeat !important;
        padding-left: 59px;
        background-position: right !important;
    }
    .bg-gradient-primary {
        background-color: #00246a !important;
        background-image: -webkit-gradient(linear,left top,left bottom,color-stop(10%,#00246a),to(#00246a)) !important;
        background-image: linear-gradient(180deg,#00246a 10%,#00246a 100%) !important;
        background-size: cover !important;
    }
</style>
<main class="py-4">
    @yield('content')
</main>



<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.j') }}" defer></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}" defer></script>
<script src="{{ asset('js/uca.min.js') }}" defer></script>
</body>
</html>
