@extends('template.basicoAdmin.main')
@section('titulo_container','Editar usuario '.Auth::User()->nombre.' '.Auth::User()->apellido)
@section('titulo_pestaña','EditarUsuario')

@section('contenido_container')

    @include('template.basicoAdmin.partes.errores')
    {!! Form::open(['route'=> ['usuario.perfil.update', Auth::User()->id ],'method'=>'PUT' ]) !!}
    <div class="form-group">
        {!! Form::label('nombre','Nombre:')!!}
        {!! Form::text('nombre', Auth::User()->nombre,['class'=>'form-control','placeholder'=>'Ingresa el nombre','required']) !!}
        <br>
        {!! Form::label('apellido','Apellido:')!!}
        {!! Form::text('apellido', Auth::User()->apellido,['class'=>'form-control','placeholder'=>'Ingresa el apellido','required']) !!}
        <br>
        {!! Form::label('telefono','Telefono:')!!}
        {!! Form::number('telefono', Auth::User()->telefono,['class'=>'form-control','placeholder'=>'ejemplo: 2213054833','required']) !!}
        <br>
        {!! Form::submit('Editar',['class'=>'btn btn-default'])!!}
    </div>
    {!! Form::close()!!}
@endsection


