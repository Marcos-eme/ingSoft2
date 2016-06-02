<div class="container">
    <section id="main">
        <div class="col-md-12">
            <div class="row">
                <h1 class="text-center">@yield ('titulo_container','')</h1>
                <h1 class="text-center"></h1>
            </div>
            <br> <br>
            <div class="row">
                        @include('flash::message')
                        @include('template.default.Perfil.partes.errores')


                @if($hospedajes->count()>0)
                    @foreach($hospedajes as $hospedaje)

                        <div class="media">
                        <a href="#" class="pull-left"><img class="img-responsive img-thumbnail"
                                                          src="{{'../images/hospedajes/'.$hospedaje->imagenes()->first()->nombre}}" alt="" class="media-object"></a>
                        <div class="media-body">
                            <h1 class="media-heading">hospedaje 1 </h1>
                            <p>{{$hospedaje->descripcion}}</p>
                        </div>
                    </div>
                    @endforeach
                @else
                <p>aun no tienes hospedajes</p>
                @endif

            </div>
        </div>
    </section>
</div>