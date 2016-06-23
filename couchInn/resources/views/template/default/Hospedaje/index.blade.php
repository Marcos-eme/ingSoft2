@extends('template.basicoAdmin.main')
@section('titulo_pestaña','hospedaje')

@section('contenido_container')
    <div class="jumbotron">
    <h1 class="text-center">Hola mi nombre es {{$hospedaje->usuario->nombre.' '.$hospedaje->usuario->apellido}}</h1>
    <h2 class="text-center">Tengo un/a {{$hospedaje->tipoHospedaje->tipo}}</h2>
    <h3 class="text-center">En la provincia de {{$hospedaje->provincia->provincia}}</h3>
    <h3 class="text-center">Ciudad {{$hospedaje->ciudad->ciudad}}</h3>
    <br>
    </div>
    <p><bold>Calle: </bold>{{$hospedaje->calle}}</p>
    <p><bold>Numero: </bold>{{$hospedaje->numero}}</p>
    <p><bold>Capacidad: </bold>{{$hospedaje->capacidad}}</p>
    <p class="lead"><bold>Descripcion: </bold>{{$hospedaje->descripcion}}</p>
    <div class="row">
        <div class="col-xs-6 col-md-6 col-md-offset-3">
            <img class="img-responsive img-thumbnail" style="width:500px ; height: auto;"
                                           src="{{asset('/images/hospedajes/'.$hospedaje->imagenes()->first()->nombre)}}"
                                           alt="" class="media-object">
       </div>
    </div>
    <!--POR SI HAY MAS IMAGENES QUE LA PRINCIPAL DE LA VIVIENDA-->
    <div class="row">
        @foreach($hospedaje->imagenes as $imagen)
            @if($imagen->nombre != $hospedaje->imagenes()->first()->nombre)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img style="width:200px ; height: auto;"
                             src="{{asset('/images/hospedajes/'.$imagen->nombre)}}">
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <h3>Caracteristicas: </h3>
    <br>
    <p><bold>Wifi: </bold>{{$hospedaje->wifi}}</p>
    <p><bold>Cable: </bold>{{$hospedaje->cable}}</p>
    <p><bold>Baños: </bold>{{$hospedaje->baños}}</p>
    <p><bold>Habitaciones: </bold>{{$hospedaje->habitaciones}}</p>
    <p><bold>Tipo de Cama: </bold>{{$hospedaje->tipo_cama}}</p>
    <p><bold>Tipo de habitacion: </bold>{{$hospedaje->tipo_habitacion}}</p>

@endsection