<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tieudetrang')</title>

    <link rel="icon" href="{{ asset('../public/img/core-img/favicon.ico') }}">

<!-- Core Stylesheet -->
    <link href="{{asset('../public/css/style.css')}}" rel="stylesheet">

<!-- Responsive CSS -->
    <link href="{{asset('../public/css/responsive/responsive.css')}}" rel="stylesheet">

</head>
<body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
    <script src="{{ asset('../public/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('../public/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap-4 js -->
    <script src="{{ asset('../public/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins JS -->
    <script src="{{ asset('../public/js/others/plugins.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('../public/js/active.js') }}"></script>

</body>
</html>
