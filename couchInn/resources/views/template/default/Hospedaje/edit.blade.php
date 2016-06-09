@extends('template.basicoAdmin.main')
@section('titulo_container','Editar Hospedaje')
@section('titulo_pestaña','EditarHospedaje')

@section('contenido_container')

    {!! Form::open(['route'=>['usuario.hospedaje.update', $hospedaje],'method'=>'PUT','files'=>'true']) !!}
    <div class="form-group">
        {!! Form::label('tipo_hospedaje','Clase de hospedaje:')!!}
        {!! Form::select('tipo_hospedaje', $tipo_hospedajes) !!}
        <br>
        {!! Form::label('provincia','Provincia:')!!}
        {!! Form::text('provincia',$hospedaje->provincia,['class'=>'form-control','placeholder'=>'Ingresa la provincia','required']) !!}
        <br>
        {!! Form::label('ciudad','Ciudad:')!!}
        {!! Form::text('ciudad',$hospedaje->ciudad,['class'=>'form-control','placeholder'=>'Ingresa la ciudad','required']) !!}
        <br>
        {!! Form::label('calle','Calle:')!!}
        {!! Form::text('calle',$hospedaje->calle,['class'=>'form-control','placeholder'=>'Ingresa la calle','required']) !!}
        <br>
        {!! Form::label('numero','Numero:')!!}
        {!! Form::number('numero',$hospedaje->numero,['class'=>'form-control','placeholder'=>'ejemplo: 2','required']) !!}
        <br>
        {!! Form::label('capacidad','Capacidad de personas a alojar:')!!}
        {!! Form::number('capacidad',$hospedaje->capacidad,['class'=>'form-control','placeholder'=>'ejemplo: 2','required']) !!}
        <br>
        {!! Form::label('descripcion','Descripcion')!!}
        {!! Form::textArea('descripcion',$hospedaje->descripcion,['class'=>'form-control','placeholder'=>'Breve descripcion del hospedaje','required']) !!}
        <br>

        <a href="{{route('usuario.hospedaje.imagenes',$hospedaje->id)}}">
            <h3>Mis Imagenes</h3>
            <div class="row">
                <div class="col-xs-6 col-md-6 col-md-offset-3">

                    <img class="img-responsive img-thumbnail" style="width:500px ; height: auto;"
                         src="{{asset('/images/hospedajes/'.$hospedaje->imagenes()->first()->nombre)}}"
                         alt="" class="media-object">
                </div>
            </div>
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
        </a>

        <!--Estas no son obligatorias -->
        {!! Form::label('wifi','Wifi: ')!!}
        {!! Form::checkbox('wifi',$hospedaje->wifi) !!}
        <br>
        {!! Form::label('cable','Cable: ')!!}
        {!! Form::checkbox('cable',$hospedaje->cable) !!}
        <br>
        {!! Form::label('baños','Cantidad de baños:')!!}
        {!! Form::number('baños',$hospedaje->baños,['class'=>'form-control','placeholder'=>'ejemplo: 2']) !!}
        <br>
        {!! Form::label('habitaciones','Cantidad de habitaciones:')!!}
        {!! Form::number('habitaciones',$hospedaje->habitaciones,['class'=>'form-control','placeholder'=>'ejemplo: 2']) !!}
        <br>
        {!! Form::label('tipo_cama','Tipo de cama:')!!}
        {!! Form::text('tipo_cama',$hospedaje->tipo_cama,['class'=>'form-control','placeholder'=>'ejemplo: sillon, cucheta, dos plazas']) !!}
        <br>
        {!! Form::label('tipo_habitacion','Modalidad de habitacion:')!!}
        {!! Form::select('tipo_habitacion', array('compartido', 'privado'), $hospedaje->tipo_habitacion, ['class'=>'form-control']) !!}
        <br>
        {!! Form::submit('Editar Hospedaje',['class'=>'btn btn-default'])!!}
    </div>
    {!! Form::close()!!}
@endsection
