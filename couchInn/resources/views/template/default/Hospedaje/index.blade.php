@extends('template.default.home.main')
@section('titulo_pestaña','hospedaje')

@section('anfitriones')


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
    @if( Auth::User())
    @if($hospedaje->usuario->id != Auth::User()->id)
        <button type="button" class="btn btn-success btn-lg pull-right" data-toggle="modal" data-target="#myModal">Reservar</button>




        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Reservar Hospedaje</h3>

                    </div>
                    <div class="modal-body">
                        <p style="color:RED;font-weight: bold">*Obligatorio agregar fecha de entrada y de salida del hospedaje</p>
                        {!! Form::open(['route'=> ['usuario.hospedaje.reservar', $hospedaje ],'method'=>'post','class'=>'modal-body']) !!}
                        @if($llegada=='')
                                {!! Form::text('fechaInicio',null,['class'=>'datepicker ','placeholder'=>'llegada','required']) !!}
                            @else
                                {!! Form::text('fechaInicio',$llegada,['class'=>'datepicker ','required']) !!}
                            @endif

                            @if($partida== '' )
                                {!! Form::text('fechaFin',null,['class'=>'datepicker ','placeholder'=>'partida','required']) !!}
                            @else
                                {!! Form::text('fechaFin',$partida,['class'=>'datepicker ','required']) !!}
                            @endif
                            {!! Form::submit('Reservar',['class'=>' btn-default btn-lg'])!!}

                        {!! Form::close()!!}

                    </div>
                    <div class="modal-footer">
                    </div>
                </div>


            </div>
        </div>

    @endif
    @endif

@endsection

@section('como_funciona')
    {!! Form::open(['route'=>['usuario.hospedaje.preguntar',$hospedaje],'method'=>'post']) !!}
    {!! Form::label('pregunta','Pregunta')!!}
    {!! Form::textArea('pregunta',null,['class'=>'form-control','placeholder'=>'Escribe tus dudas aquí!','required']) !!}
    {!! Form::submit('Andale, a preguntar pues iiija!',['class'=>' btn-default btn-lg'])!!}
    {!! Form::close() !!}

<div>
    @include ('flash::message')
    @if($hospedaje->preguntas->count()==0)
        {!! 'No se han realizado preguntas para este hospedaje, se el primero!' !!}
    @else



        <li><div>Preguntas
        @foreach($hospedaje->preguntas as $p)


             <ul>
            {!! $p->pregunta !!}
             </ul>


        @endforeach
            </div>
        </li>
    @endif

 </div>
@endsection

@section('js')
    <script>
        $(function() {
            $( ".datepicker" ).datepicker({dateFormat:'dd/mm/yy', minDate: 0, maxDate: "+2y"});
        });
    </script>
@endsection

