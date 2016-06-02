
<!-- Esto es provisorio hasta que busquemos el template exacto-->
@extends('template.default.Home.main')
@section('titulo_pestaña','Home')


@section('inicio')
    @include('template.default.Home.partes.inicio')
@endsection

@section('como_funciona')
    @include('template.default.Home.partes.como_funciona')
@endsection

@section('anfitriones')
    @include('template.default.Home.partes.anfitriones')
@endsection

@section('mas_visitados')
    @include('template.default.Home.partes.mas_visitados')
@endsection



