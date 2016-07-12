
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
    <!-- Custom CSS -->
    <link href="{{asset('Bootstrap/css/scrolling-nav.css')}}" rel="stylesheet">
    <link href="{{asset('Bootstrap/css/navBar.css')}}" rel="stylesheet">

    <!--CHOSEN ESTILOS-->
    <link rel="stylesheet" href="{{asset('chosen/chosen.css')}}">

    <!--css de jquery para datepicker!-->
    <link rel="stylesheet" href="{{asset('jquery-ui.structure.min.css')}}">
    <link rel="stylesheet" href="{{asset('jquery-ui.theme.min.css')}}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" >

@include('template.default.Home.partes.nav')

@include('template.basicoAdmin.partes.errores')

@yield('inicio')
@yield('anfitriones')
@yield('como_funciona')
@yield('mas_visitados')

@include('template.default.Home.partes.footer')
<!-- jQuery -->
<script src="{{asset('Bootstrap/js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('Bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Scrolling Nav JavaScript -->
<script src="{{asset('Bootstrap/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('Bootstrap/js/scrolling-nav.js')}}"></script>
<script>
    $().ready(function(){
        $("#carousel_home").carousel({interval:5000,pause:false});});
</script>

<script src="{{asset('chosen/chosen.jquery.js')}}"></script>
<script src="{{asset('jquery-ui.min.js')}}"></script>

@yield('js')

</body>

</html>
