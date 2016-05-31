<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo_pestaña') </title>
    <link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap.css')}}">

</head>
<body>
@include('template.default.partes.nav')
@include('template.basicoAdmin.partes.container')
@include('template.basicoAdmin.partes.footer')

<script src="{{asset('jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('Bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>