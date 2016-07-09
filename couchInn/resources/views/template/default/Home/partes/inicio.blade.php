<section id="inicio" class="inicio-section">

    <div class="container-fluid">
        <div class="row">
            @include ('flash::message')
            <div style="position: relative;">


                <div id="carousel_home"class="carousel slide">
                    <div class="carousel-inner">
                        <img src="images/couchinn.png" width="50%" class="img-responsive img-on-top" alt="Responsive image">


                        {!! Form::open(['route'=>'home.searchHome','method'=>'post']) !!}
                        <div name="f1">
                            <div class="row search-btn-on-top">
                                {!! Form::select('provincia', $provincias,null,['placeholder'=>'elige una provincia'])!!}
                                {!! Form::select('ciudad', $ciudades,null,['placeholder'=>'elige una ciudad'])!!}
                                {!! Form::text('llegada',null,['class'=>'datepicker ','placeholder'=>'Llegada']) !!}
                                {!! Form::text('partida',null,['class'=>'datepicker ','placeholder'=>'Partida']) !!}
                                {!! Form::submit('Buscar',['class'=>' btn-default btn-lg'])!!}
                            </div>

                        </div>

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
        $(function() {
            $( ".datepicker" ).datepicker();
        });


    </script>
@endsection
