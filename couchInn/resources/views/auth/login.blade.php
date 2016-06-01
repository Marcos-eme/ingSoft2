
<!-- Esto es provisorio hasta que busquemos el template exacto-->
@extends('template.basicoAdmin.main')
@section('titulo_container','Iniciar Sesión')
@section('titulo_pestaña','Inicio Sesion')

@section('contenido_container')
    {!! Form::open(['url'=>'/login','method'=>'POST']) !!}
        <div class="form-group">
        {!! Form::label('email','Email:')!!}
        {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'ejemplo@email.com','required']) !!}
        <br>
        {!! Form::label('password','Password:')!!}
        {!! Form::password('password',['class'=>'form-control','placeholder'=>'*****','required']) !!}
        <br>
        </div>
        <div class="input-group">
            {!! Form::label('remember-me','Recordarme: ')!!}
            {!! Form::checkbox('remember',true) !!}

        </div>
    <br>

        <div class="form-group">
        {!! Form::submit('Iniciar Sesion',['class'=>'btn btn-default'])!!}
        </div>
    {!! Form::close()!!}
@endsection