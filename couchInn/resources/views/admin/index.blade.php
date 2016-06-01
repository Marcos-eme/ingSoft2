@extends('template.basicoAdmin.main')
@section('titulo_container','Bienvenido/a '.Auth::User()->nombre.' '.Auth::User()->apellido)
@section('titulo_pestaña','Administracion')
