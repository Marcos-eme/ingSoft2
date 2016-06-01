
<!-- Esto es provisorio hasta que busquemos el template exacto-->
@extends('template.basicoAdmin.main')
@section('titulo_container','Regístrate')
@section('titulo_pestaña','Regístrate')

@section('contenido_container')
    {!! Form::open(['url'=>'/register','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('nombre','Nombre:')!!}
        {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre','required']) !!}
        <br>
        {!! Form::label('apellido','Apellido:')!!}
        {!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingresa el apellido','required']) !!}
        <br>
        {!! Form::label('email','Email:')!!}
        {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'ejemplo@email.com','required']) !!}
        <br>
        {!! Form::label('password','Password:')!!}
        {!! Form::password('password',['class'=>'form-control','placeholder' => '*****' ,'required']) !!}
        <br>
        {!! Form::submit('Registrar',['class'=>'btn btn-default'])!!}
    </div>
    {!! Form::close()!!}
@endsection