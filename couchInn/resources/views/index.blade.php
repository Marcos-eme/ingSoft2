
<!-- Esto es provisorio hasta que busquemos el template exacto-->
@extends('template.default.main')
@section('titulo_pestaña','Home')


@section('intro')
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
        </div>
    </section>
@endsection

@section('como_funciona')
    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Como funciona</h1>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('anfitriones')

    <!-- Services Section -->

        <section id="services" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Anfitriones destacados</h1>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placehold.it/320x150" alt="">
                                <div class="caption">
                                   <!-- <h4 class="pull-right">$24.99</h4>-->
                                    <h4><a href="#">Hospedaje1</a>
                                    </h4>
                                    <p>hola soy un hospedaje.</p>
                                </div>
                                <div class="ratings">
                                    <p class="pull-right">15 reviews</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placehold.it/320x150" alt="">
                                <div class="caption">
                                    <!-- <h4 class="pull-right">$24.99</h4>-->
                                    <h4><a href="#">Hospedaje2</a>
                                    </h4>
                                    <p>hola soy un hospedaje.</p>
                                </div>
                                <div class="ratings">
                                    <p class="pull-right">15 reviews</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placehold.it/320x150" alt="">
                                <div class="caption">
                                    <!-- <h4 class="pull-right">$24.99</h4>-->
                                    <h4><a href="#">Hospedaje3</a>
                                    </h4>
                                    <p>hola soy un hospedaje.</p>
                                </div>

                                <div class="ratings">
                                    <p class="pull-right">15 reviews</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

@endsection

@section('mas_visitados')

    <!-- Contact Section -->


    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title_section">Más visitados</h1>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <!-- <h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="#">Lugar 1</a>
                                </h4>
                                <p>hola soy un lugar</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <!-- <h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="#">Lugar 2</a>
                                </h4>
                                <p>hola soy un lugar</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <!-- <h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="#">Lugar 3</a>
                                </h4>
                                <p>hola soy un lugar</p>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection



