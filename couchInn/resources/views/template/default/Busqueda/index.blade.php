@extends('template.default.Home.main')
@section('titulo_container','lista hospedajes')
@section('titulo_pestaña','ListaDeHospedajes')

@section('inicio')
<div class="container">
    <section id="main">
        <div class="col-md-12">
            <div class="row">
                <h1 class="text-center">@yield ('titulo_container','')</h1>
                <h1 class="text-center"></h1>
            </div>
            <br> <br>
            <div class="pagination">
                <div class="row">
                    @if($hospedajes->count()>0)
                        @foreach($hospedajes as $hospedaje)
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <a href="#" class="pull-left"><img class="img-responsive img-thumbnail" style="width:250px ; height: auto";
                                                                       src="{{asset('/images/hospedajes/'.$hospedaje->imagenes()->first()->nombre)}}" alt="" class="media-object"></a>

                                    <div class="media">
                                        <div class="media-body">
                                            <h1 class="text-center">Ciudad: {{$hospedaje->ciudad->ciudad}}</h1>
                                            <h2 class="text-center">Provincia: {{$hospedaje->provincia->provincia}}</h2>
                                            <h3 class="text-center">{{$hospedaje->descripcion}}</h3>

                                        </div>
                                        <a href="{{route('usuario.hospedaje.index',['hospedaje'=>$hospedaje,'llegada'=>$llegada,'partida'=>$partida])}}" class="btn btn-success pull-right" >ver</a>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @else
                        <div class="col-md-12" style="padding-bottom: 50px">
                            <p>No hay hospedajes que coincidan con la busqueda</p>
                            @endif

                        </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
