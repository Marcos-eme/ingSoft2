@extends('template.basicoAdmin.main')
@section('titulo_container','Mis Imagenes')
@section('titulo_pestaña','MisImagenes')

@section('contenido_container')

    <div class="row">
        <a href="{{route('usuario.perfil.index')}}" class="btn btn-info">Volver a mi perfil</a>
    </div>
<div class="row">
    @foreach($hospedaje->imagenes as $imagen)

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img style="width:200px ; height: auto;"
                         src="{{asset('/images/hospedajes/'.$imagen->nombre)}}">
                    <div class="caption col-md-12 col-md-offset-4">
                        <a href="{{route('usuario.hospedaje.deleteImage',[$imagen->id,$hospedaje->id])}}" onclick="return confirm('¿seguro que desea eliminar la imagen?')"
                           class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>

    @endforeach
</div>
    {!! Form::open(['route'=>['usuario.hospedaje.storeImage', $hospedaje],'method'=>'PUT','files'=>'true']) !!}
        <br>
        {!! Form::label('imagen','Agregar Imagen:')!!}
        {!! Form::file('imagen') !!}
        {!! Form::submit('Agregar Imagen',['class'=>'btn btn-default'])!!}
    {!! Form::close()!!}


@endsection
