@extends('template.basicoAdmin.main')
@section('titulo_container','Editar Hospedaje')
@section('titulo_pestaña','EditarHospedaje')

@section('contenido_container')
    <h1 class="text-center">Hola mi nombre es {{$hospedaje->usuario->nombre.' '.$hospedaje->usuario->apellido}}</h1>
    <h2 class="text-center">{{$hospedaje->tipoHospedaje->tipo}}</h2>
    <h3 class="text-center">{{$hospedaje->provincia}}</h3>
    <h3 class="text-center">{{$hospedaje->ciudad}}</h3>
    <br>
    <p><bold>Calle: </bold>{{$hospedaje->calle}}</p>
    <p><bold>Numero: </bold>{{$hospedaje->numero}}</p>
    <p><bold>capacidad: </bold>{{$hospedaje->capacidad}}</p>
    <p class="lead">{{$hospedaje->descripcion}}</p>
   <div class="col-xs-6 col-md-3">
    <a href="#" class="pull-left"><img class="img-responsive img-thumbnail"
                                       src="{{asset('/images/hospedajes/'.$hospedaje->imagenes()->first()->nombre)}}"
                                       alt="" class="media-object"></a>
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