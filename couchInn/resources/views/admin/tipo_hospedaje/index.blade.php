@extends('template.basicoAdmin.main')
@section('titulo_container','Lista Tipos Hospedajes')
@section('titulo_pestaña','TiposHospedajes')

@section('contenido_container')

    <table class="table table-striped">
        <thead>
        <th>Tipo</th>
        </thead>
        <tbody>
        @foreach($tipo_hospedajes as $tipo_hospedaje)
            <tr>
                <td>{{$tipo_hospedaje->tipo}}</td>
                <td><a href="{{route('admin.tipo_hospedaje.edit',$tipo_hospedaje->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                    <a href="{{route('admin.tipo_hospedaje.destroy',$tipo_hospedaje)}}" onclick="return confirm('¿seguro que desea eliminar el tipo hospedaje?')"
                       class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $tipo_hospedajes->render() !!}
    <br>
    <a href="{{route('admin.tipo_hospedaje.create')}}" class="btn btn-info">Crear nuevo tipo hospedaje</a>
@endsection