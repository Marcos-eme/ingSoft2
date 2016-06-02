<div class="container">
    <section id="main">
        <div class="col-md-12" style="height: 100px">

            <a class="navbar-brand logo page-scroll" href="{{url('/')}}">  </a>
            <div class="row">
               <H1>{{Auth::User()->nombre.' '.Auth::User()->apellido}}</H1>
                <h2>ACA VA LA IMAGEN </h2>
                <br>
                <a href="{{ url('/logout') }}">Salir</a>
            </div>
        </div>
    </section>
</div>