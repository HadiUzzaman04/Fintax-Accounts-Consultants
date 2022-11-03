<!DOCTYPE HTML>
<html>

<head>
    <title>fintaxaccounts&consultant.com</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('website/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/css/main.css')}}" />
    <noscript>
        <link rel="stylesheet" href="{{asset('website/css/noscript.css')}}" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->
        @include('layouts.header')

        <!-- Main -->
        @yield('content')

        <!-- Footer -->
        @include('layouts.footer')

    </div>
    <!-- Scripts -->
    <script src="{{asset('website/js/jquery.min.js')}}"></script>
    <script src="{{asset('website/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('website/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('website/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('website/js/main.js')}}"></script>
</body>

</html>