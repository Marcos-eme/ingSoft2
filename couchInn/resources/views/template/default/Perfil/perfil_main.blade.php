
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('titulo_pestaña') </title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('Bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

@include('template.default.Perfil.partes.header')
@include('template.default.Perfil.partes.nav')
@include('template.default.Perfil.partes.mis_hospedajes')
@include('template.default.Perfil.partes.footer')
<!-- jQuery -->
<script src="{{asset('Bootstrap/js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('Bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Scrolling Nav JavaScript -->
<script src="{{asset('Bootstrap/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('Bootstrap/js/scrolling-nav.js')}}"></script>
</body>

</html>
