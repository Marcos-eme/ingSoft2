<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo_pestaña') </title>
    <link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('chosen/chosen.css')}}">
    <!--css de jquery para datepicker!-->
    <link rel="stylesheet" href="{{asset('jquery-ui.structure.min.css')}}">
    <link rel="stylesheet" href="{{asset('jquery-ui.theme.min.css')}}">
</head>
<body>
@include('template.basicoAdmin.partes.nav')
@include('template.basicoAdmin.partes.container')
@include('template.basicoAdmin.partes.footer')

<script src="{{asset('jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('Bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('chosen/chosen.jquery.js')}}"></script>
<script src="{{asset('jquery-ui.min.js')}}"></script>

@yield('js')
</body>
</html>