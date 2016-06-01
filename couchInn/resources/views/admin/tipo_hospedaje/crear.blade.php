@extends('template.basicoAdmin.main')
@section('titulo_container','Crear Tipo Hospedaje')
@section('titulo_pestaña','Crear tipo hospedaje')

@section('contenido_container')

    {!! Form::open(['route'=>'admin.tipo_hospedaje.store','method'=>'POST']) !!}
    <div class="form-group">

        {!! Form::label('tipo_hospedaje','Ingresa un tipo de hospedaje:')!!}
        {!! Form::text('tipo',null,['class'=>'form-control','placeholder'=>' ej: casa,departamento,duplex..','required']) !!}
        <br>
        {!! Form::submit('Registrar',['class'=>'btn btn-default'])!!}
    </div>
    {!! Form::close()!!}
@endsection
