<section id="inicio" class="inicio-section">

    <div class="container-fluid">
        <div class="row">
            @include ('flash::message')
            <div style="position: relative;">


                <div id="carousel_home"class="carousel slide">
                    <div class="carousel-inner">
                        <img src="images/couchinn.png" width="50%" class="img-responsive img-on-top" alt="Responsive image">


                        {!! Form::open(['route'=>'usuario.hospedaje.searchHome','method'=>'post']) !!}

                        {!! Form::select('provincia', $provincias ,null,['class'=>'form-control input-lg search-bar-on-top'])!!}

                        {!! Form::submit('Buscar',['class'=>'btn-default text-left search btn-lg search search-btn-on-top'])!!}
                        {!! Form::close()!!}


                        <div class="item active"><img src="images/home1.jpg"  class="img-responsive" alt="">
                        </div>

                        <div class="item  "><img src="images/home3.jpg"  class="img-responsive" alt="">
                        </div>
                        <div class="item "><img src="images/home4.jpg"  class="img-responsive" alt="">
                        </div>
                        <div class="item "><img src="images/home5.jpg" class="img-responsive" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4">

        </div>
    </div>
</section>
@section('js')
    <script>
        $(".chosen-select").chosen({disable_search_threshold: 10});

    </script>
@endsection
