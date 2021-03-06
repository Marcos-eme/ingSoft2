@extends('template.default.Home.main')

@section('titulo_pestaña','Nueva donacion')

@section('inicio')

    {!! Form::open(['route'=>'usuario.donar.store','method'=>'POST']) !!}
        <div class="form-group inicio-section col-md-3" >
            <!-- EN LA CLASE FORM agrega como primer parametro el "id"
            como segundo parametro va a depender del tipo que sea: en el caso del text
            seria los mismo que hacer:
            <input class="form-control" placeholder="Ingresa el nombre" required="required"
            name="nombre" type="text" id="nombre">  el null seria un valor por defecto.
            *En el caso de label el segundo parametro es un valor por defecto que es Nombre
            -->
            {!! Form::label('monto','Monto a donar:')!!}
            {!! Form::number('monto',null,['class'=>'form-control','placeholder'=>'Ingresa el monto a donar','required']) !!}
            {!! Form::submit('¡DONAR!',['class'=>'btn btn-success'])!!}

        </div>
    {!! Form::close()!!}
@endsection

