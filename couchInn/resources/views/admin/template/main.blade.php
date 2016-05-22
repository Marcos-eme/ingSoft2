<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo','FaltaTituloVieja') </title>
    <link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap.css')}}">

</head>
<body>
@include('admin.template.partes.nav')
@include('admin.template.partes.container')
@include('admin.template.partes.footer')

<script src="{{asset('jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('Bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>