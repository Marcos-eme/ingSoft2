@extends('template.basicoAdmin.main')
@section('titulo_container','Crear Usuario')
@section('titulo_pestaña','UsuarioNew')

@section('contenido_container')

    {!! Form::open(['route'=>'admin.usuario.store','method'=>'POST']) !!}
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
            {!! Form::password('password',['class'=>'form-control','required']) !!}
            <br>
            {!! Form::label('telefono','Telefono:')!!}
            {!! Form::number('telefono',null,['class'=>'form-control','placeholder'=>'ejemplo: 2213054833','required']) !!}
            <br>
            {!! Form::label('rol_id','Rol(esto es momentario hay que cambiar la manera):')!!}
            {!! Form::number('rol_id',null,['class'=>'form-control','placeholder'=>'1=admin,2=miembro,3=golden','required']) !!}
            <br>
            {!! Form::submit('Registrar',['class'=>'btn btn-default'])!!}
        </div>
    {!! Form::close()!!}
@endsection


