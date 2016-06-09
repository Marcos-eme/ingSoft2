@extends('template.basicoAdmin.main')
@section('titulo_container','Lista Donaciones')
@section('titulo_pestaña','Donaciones')

@section('contenido_container')
    <table class="table table-striped">
        <thead>
        <th>Donaciones</th>
        </thead>
        <tbody>
        <td>{{"Monto" . " --- " . "Usuario" . " --- " . "Fecha"}}</td>
        @foreach($donaciones as $donacion)
            <tr>
                <td>{{$donacion->monto}}{{" - " . $donacion->usuario->email . " - " . $donacion->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $donaciones->render() !!}
    <br>
@endsection