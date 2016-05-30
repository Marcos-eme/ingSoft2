@extends('template.basicoAdmin.main')
@section('titulo_container','Editar Tipo Hospedaje')
@section('titulo_pestaña','Editar Tipo Hospedaje')

@section('contenido_container')


    {!! Form::open(['route'=>['admin.rol.update', $rol ],'method'=>'PUT']) !!}
    <div class="form-group">

        {!! Form::label('rol','Rol:')!!}
        {!! Form::text('rol',$rol->rol,['class'=>'form-control','placeholder'=>' ej: miembro,admin,golden,platinum..','required']) !!}
        <br>
        {!! Form::submit('Editar',['class'=>'btn btn-default'])!!}
    </div>
    {!! Form::close()!!}
@endsection
