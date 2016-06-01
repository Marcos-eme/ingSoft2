
<!-- Esto es provisorio hasta que busquemos el template exacto-->
@extends('template.default.main')
@section('titulo_pestaña','Home')


@section('inicio')
    @include('template.default.partes.inicio')
@endsection

@section('como_funciona')
    @include('template.default.partes.como_funciona')
@endsection

@section('anfitriones')
    @include('template.default.partes.anfitriones')
@endsection

@section('mas_visitados')
    @include('template.default.partes.mas_visitados')
@endsection



