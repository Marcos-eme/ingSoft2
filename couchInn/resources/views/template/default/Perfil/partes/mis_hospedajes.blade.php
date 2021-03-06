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
                    @include('template.default.Perfil.partes.errores')
                    @if($hospedajes->count()>0)
                     <a href="{{route('usuario.hospedaje.create')}}" class="btn btn-success" >Agregar Hospedaje</a>
                    @foreach($hospedajes as $hospedaje)
                            <div class="media">
                            <a href="#" class="pull-left"><img class="img-responsive img-thumbnail" style="width:250px ; height: auto";
                                                               src="{{asset('/images/hospedajes/'.$hospedaje->imagenes()->first()->nombre)}}" alt="" class="media-object"></a>
                                <h3>Ciudad: {{$hospedaje->ciudad->ciudad}}</h3>
                                <h4>Provincia: {{$hospedaje->provincia->provincia}}</h4>
                                <p>{{$hospedaje->descripcion}}</p>
                                <a href="{{route('usuario.hospedaje.edit',$hospedaje)}}" class="btn btn-success">editar hospedaje</a>
                                <a href="{{route('usuario.hospedaje.index',$hospedaje->id)}}" class="btn btn-success">ver hospedaje</a>
                                <a href="{{route('usuario.hospedaje.destroy',$hospedaje)}}" onclick="return confirm('¿seguro que desea eliminar este hospedaje?')"
                                       class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
                                <a href="" class="btn btn-success">ver reservas</a>
                            </div>

                        @endforeach
                    @else
                        <div class="col-md-12" style="padding-bottom: 50px">
                            <p>¡Aún no tienes hospedajes!</p>
                         </div>
                        <a href="{{route('usuario.hospedaje.create')}}" class="btn btn-success">Agregar Hospedaje</a>

                    @endif

                </div>
            </div>
        </div>
    </section>
</div>