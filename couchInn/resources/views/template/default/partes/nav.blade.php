<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        <a class="navbar-brand page-scroll" href="#page-top">CouchInn</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
            @if(Auth::User())

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                    <li><a href="{{route('admin.usuario.index')}}">Conviertete en anfitrion</a></li>
                    <a  class="dropdown-toggle btn btn-info" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::User()->nombre .'  '. Auth::User()->apellido}}<span class="caret" ></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('user.perfil.show',Auth::User()->id)}}">Mi perfil</a></li>
                        <li><a href="{{ url('#$%^#%&$') }}">Mis viajes</a></li>
                        <li><a href="{{ url('#%^#%') }}">Mis reservas</a></li>
                        <li><a href="{{ url('#$%^#%^#^#$') }}">Mis hospedajes</a></li>
                        <li><a href="{{ url('#%^#$^3#$%^#%') }}">Editar perfil</a></li>
                         <li><a href="{{ route('user.donner.donar', Auth::User()->id) }}">Donar</a></li> 
                        <li><a href="{{ url('/logout') }}">Salir</a></li>

                    </ul>
                    </li>
                </ul>
            @else
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Anfitriones destacados</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Como funciona</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Mas visitados</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/login')}}">Iniciar Sesión</a></li>
                    <li><a href="{{url('/register')}}">Regístrate</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            @endif
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
