@extends('template.basicoAdmin.main')
@section('titulo_container','Lista Roles')
@section('titulo_pestaña','Roles')

@section('contenido_container')
    <table class="table table-striped">
        <thead>
        <th>Rol</th>
        </thead>
        <tbody>
        @foreach($roles as $rol)
            <tr>
                <td>{{$rol->rol}}</td>
                <td><a href="{{route('admin.rol.edit',$rol->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="{{route('admin.rol.destroy',$rol)}}" onclick="return confirm('¿seguro que desea eliminar este rol?')"
                       class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $roles->render() !!}
    <br>
    <a href="{{route('admin.rol.create')}}" class="btn btn-info">Crear nuevo rol</a>
@endsection