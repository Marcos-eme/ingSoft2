@extends('template.default.Home.main')
@section('titulo_container','Crear Hospedaje')
@section('titulo_pestaña','CrearHospedaje')

@section('inicio')

    {!! Form::open(['route'=>'usuario.hospedaje.store','method'=>'post','files'=>'true']) !!}
        <div class="form-group" style= "margin-top:10%;margin-left:5%;margin-right:5%;">
            <!--Obligatorias -->
        @if($usuario->telefono == null)
            {!! Form::label('telefono','Telefono:',['require'])!!}
            {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingresa el telefono','required']) !!}
            <br>
        @endif
            {!! Form::label('tipo_hospedaje','Clase de hospedaje:')!!}
            {!! Form::select('tipo_hospedaje', $tipo_hospedajes,null,['class'=>'form-control chosen-select']) !!}
            <br>
            {!! Form::label('provincia','Provincia:')!!}
            {!! Form::select('provincia', $provincias ,null,['class'=>'form-control chosen-select']) !!}
            <br>
            {!! Form::label('ciudad','Ciudad:')!!}
            {!! Form::select('ciudad', $ciudades ,null,['class'=>'form-control chosen-select']) !!}

            <br>

        {!! Form::label('calle','Calle:')!!}
        {!! Form::text('calle',null,['class'=>'form-control','placeholder'=>'Ingresa la calle','required']) !!}
        <br>
        {!! Form::label('numero','Numero:')!!}
        {!! Form::number('numero',null,['class'=>'form-control','placeholder'=>'ejemplo: 2','required']) !!}
        <br>
        {!! Form::label('capacidad','Capacidad de personas a alojar:')!!}
        {!! Form::number('capacidad',null,['class'=>'form-control','placeholder'=>'ejemplo: 2','required']) !!}
        <br>
        {!! Form::label('descripcion','Descripcion')!!}
        {!! Form::textArea('descripcion',null,['class'=>'form-control','placeholder'=>'Breve descripcion del hospedaje','required']) !!}
        <br>
        {!! Form::label('imagen','Imagen Hospedaje:')!!}
        {!! Form::file('imagen',['class'=>'form-control']) !!}
        <br>



        <!--Estas no son obligatorias -->
        {!! Form::label('wifi','Wifi: ')!!}
        {!! Form::checkbox('wifi',false) !!}
        <br>
        {!! Form::label('cable','Cable: ')!!}
        {!! Form::checkbox('cable',false) !!}
        <br>
        {!! Form::label('baños','Cantidad de baños:')!!}
        {!! Form::number('baños',1,['class'=>'form-control','placeholder'=>'ejemplo: 2']) !!}
        <br>
        {!! Form::label('habitaciones','Cantidad de habitaciones:')!!}
        {!! Form::number('habitaciones',1,['class'=>'form-control','placeholder'=>'ejemplo: 2']) !!}
        <br>
        {!! Form::label('tipo_cama','Tipo de cama:')!!}
        {!! Form::text('tipo_cama',null,['class'=>'form-control','placeholder'=>'ejemplo: sillon, cucheta, dos plazas']) !!}
        <br>
        {!! Form::label('tipo_habitacion','Modalidad de habitacion:')!!}
        {!! Form::select('tipo_habitacion', array('compartido', 'privado'), 'privado', ['class'=>'form-control']) !!}
        <br>
        {!! Form::submit('AgregarHospedaje',['class'=>'btn btn-default'])!!}
    </div>
    {!! Form::close()!!}


@endsection

@section('js')
    <script>
        $(".chosen-select").chosen({disable_search_threshold: 10});
    </script>
@endsection


