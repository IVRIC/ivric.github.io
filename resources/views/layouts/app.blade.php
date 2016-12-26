<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'IVIRC') }}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.css')}}">
    <script src="assets/js/ie/html5shiv.js"></script>
    <script>
        window.Laravel = '<?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>'
    </script>
</head>
<body class="landing">
<div id="page-wrapper">

    @include('includes.header')
    @yield('content')
    @include('includes.footer')

</div>



<script src='http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
<script src="assets/js/particles.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/ie/respond.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/toastr.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
@include('vendor.toasts')
@stack('scripts')
</body>
</html>