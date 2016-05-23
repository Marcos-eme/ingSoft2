@extends('admin.template.main')
@section('titulo_container','ListaUsuarios')
@section('titulo_pestaña','Miembros')

@section('contenido_container')

    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Foto</th>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellido}}</td>
                    <td>{{$usuario->telefono}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->foto}}</td>
                    <td><a href="" class="btn btn-success"></a><a href="" class="btn btn-danger"></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $usuarios->render() !!}
<br>
    <a href="{{route('admin.usuario.create')}}" class="btn btn-info">Registrar nuevo usuario</a>
@endsection