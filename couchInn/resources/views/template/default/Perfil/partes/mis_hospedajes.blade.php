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
                 <a href="{{route('usuario.hospedaje.create')}}" class="btn btn-success" ">Agregar Hospedaje</a>
                @foreach($hospedajes as $hospedaje)
                        <div class="media">
                        <a href="#" class="pull-left"><img class="img-responsive img-thumbnail" style="width:250px ; height: auto";
                                                           src="{{asset('/images/hospedajes/'.$hospedaje->imagenes()->first()->nombre)}}" alt="" class="media-object"></a>
                            <div class="media-body">
                            <h1 class="media-heading">hospedaje 1 </h1>
                            <p>{{$hospedaje->descripcion}}</p>
                            <a href="{{route('usuario.hospedaje.edit',$hospedaje)}}" class="btn btn-success">editar hospedaje</a>
                            <a href="{{route('usuario.hospedaje.index',$hospedaje->id)}}" class="btn btn-success">ver hospedaje</a>
                        </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12" style="padding-bottom: 50px">
                    <p>¡Aún no tienes hospedajes!</p>
                     </div>
                    <a href="{{route('usuario.hospedaje.create')}}" class="btn btn-success" ">Agregar Hospedaje</a>

                @endif

            </div>
            </div>
        </div>
    </section>
</div>