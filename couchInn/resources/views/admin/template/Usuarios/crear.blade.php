@extends('admin.template.main')
@section('titulo_container','Crear Usuario')
@section('titulo_pestaña','UsuarioNew')

@section('contenido_container')
    {!! Form::open(['route'=>'admin.usuario.store','method'=>'POST']) !!}
        <div class="form-group">
            <!-- EN LA CLASE FORM agrega como primer parametro el "id"
            como segundo parametro va a depender del tipo que sea: en el caso del text
            seria los mismo que hacer:
            <input class="form-control" placeholder="Ingresa el nombre" required="required"
            name="nombre" type="text" id="nombre">  el null seria un valor por defecto.
            *En el caso de label el segundo parametro es un valor por defecto que es Nombre
            -->
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
            {!! Form::label('imagen','Imagen:')!!}
            {!! Form::file('imagen',['required']) !!}
            <br>
            {!! Form::submit('Registrar',['class'=>'btn btn-default'])!!}
        </div>
    {!! Form::close()!!}
@endsection


