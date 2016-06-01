@extends('template.basicoAdmin.main')
@section('titulo_container','Crear Tipo Hospedaje')
@section('titulo_pestaña','Crear tipo hospedaje')

@section('contenido_container')

    {!! Form::open(['route'=>'admin.rol.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('rol','Ingresa un rol en el sistema:')!!}
        {!! Form::text('rol',null,['class'=>'form-control','placeholder'=>' ej: miembro,admin,golden,platinum..','required']) !!}
        <br>
        {!! Form::submit('Registrar',['class'=>'btn btn-default'])!!}
    </div>
    {!! Form::close()!!}
@endsection
