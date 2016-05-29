@extends('admin.template.main')
@section('titulo_container','Bienvenido/a '.Auth::User()->nombre.' '.Auth::User()->apellido)
@section('titulo_pestaña','Administracion')

@if(Auth::User())

        <h1>Soy admin????</h1>

@else
    @include('auth/partes/formulario')
@endif