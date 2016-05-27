@extends('admin.template.main')
@section('titulo_container','Editar Tipo Hospedaje')
@section('titulo_pestaña','Editar Tipo Hospedaje')

@section('contenido_container')


    {!! Form::open(['route'=>['admin.tipo_hospedaje.update', $tipo_hospedaje ],'method'=>'PUT']) !!}
    <div class="form-group">

        {!! Form::label('tipo_hospedaje','Ingresa un tipo de hospedaje:')!!}
        {!! Form::text('tipo',$tipo_hospedaje->tipo,['class'=>'form-control','placeholder'=>' ej: casa,departamento,duplex..','required']) !!}
        <br>
        {!! Form::submit('Editar',['class'=>'btn btn-default'])!!}
    </div>
    {!! Form::close()!!}
@endsection
