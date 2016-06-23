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

    <link href="{{asset('Bootstrap/css/scrolling-nav.css')}}" rel="stylesheet">

    <link href="{{asset('Bootstrap/css/perfil')}}" rel="stylesheet">

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body>
    @include('template.default.Perfil.partes.nav')
    <div class="container">
        @include('template.default.Perfil.partes.header')

    </div>

    <div class="container" >
        <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs">
                            <li class="active" ><a data-toggle="tab" href="#mis_datos" aria-controls="mis_datos">Mis datos</a></li>
                            <li ><a data-toggle="tab" href="#mis_hospedajes" aria-controls="mis_hospedajes">Mis hospedajes</a></li>
                            <li ><a data-toggle="tab" href="#mis_viajes" aria-controls="mis_viajes">Mis viajes</a></li>
                            <li ><a data-toggle="tab" href="#mis_reservas" aria-controls="mis_reservas">Mis reservas</a></li>
                            <li ><a data-toggle="tab" href="#mis_donaciones" aria-controls="mis_donaciones">Mis donaciones</a></li>

                    </ul>
                    <div class="tab-content">
                        <div id="mis_datos"  class="tab-pane active">
                            @include('template.default.Perfil.partes.mis_datos')
                        </div>
                        <div id="mis_hospedajes"  class="tab-pane">
                            @include('template.default.Perfil.partes.mis_hospedajes')
                        </div>
                        <div id="mis_viajes"class="tab-pane">
                            <h1>SOY MIS VIAJES, </h1>
                        </div>
                        <div id="mis_reservas"class="tab-pane">
                            <h1>SOY MIS RESERVAS</h1>
                        </div>
                        <div id="mis_donaciones"class="tab-pane">
                            @include('template.default.Perfil.partes.mis_donaciones')
                        </div>

                    </div>
                </div>
        </div>
    </div>
<div class="container">
 @yield('donar')
 @include('template.default.Perfil.partes.footer')
</div>

<!-- jQuery -->
<script src="{{asset('Bootstrap/js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('Bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Scrolling Nav JavaScript -->
<script src="{{asset('Bootstrap/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('Bootstrap/js/scrolling-nav.js')}}"></script>
</body>

</html>
