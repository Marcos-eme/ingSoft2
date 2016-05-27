@extends('admin.template.main')
@section('titulo_container','Editar usuario '.$usuario->nombre.' '.$usuario->apellido)
@section('titulo_pestaña','EditarUsuario')

@section('contenido_container')

    @include('admin.template.partes.errores')
    {!! Form::open(['route'=> ['admin.usuario.update', $usuario ],'method'=>'PUT' ]) !!}
    <div class="form-group">
        {!! Form::label('nombre','Nombre:')!!}
        {!! Form::text('nombre',$usuario->nombre,['class'=>'form-control','placeholder'=>'Ingresa el nombre','required']) !!}
        <br>
        {!! Form::label('apellido','Apellido:')!!}
        {!! Form::text('apellido',$usuario->apellido,['class'=>'form-control','placeholder'=>'Ingresa el apellido','required']) !!}
        <br>
        {!! Form::label('email','Email:')!!}
        {!! Form::email('email',$usuario->email,['class'=>'form-control','placeholder'=>'ejemplo@email.com','required']) !!}
        <br>
        {!! Form::label('password','Password:')!!}
        {!! Form::password('password',['class'=>'form-control','required']) !!}
        <br>
        {!! Form::label('telefono','Telefono:')!!}
        {!! Form::number('telefono',$usuario->telefono,['class'=>'form-control','placeholder'=>'ejemplo: 2213054833','required']) !!}
        <br>
        {!! Form::label('imagen','Imagen:')!!}
        {!! Form::file('imagen',['required']) !!}
        <br>
        {!! Form::submit('Editar',['class'=>'btn btn-default'])!!}
    </div>
    {!! Form::close()!!}
@endsection


