<nav class="navbar navbar-default navbar-custom " role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo page-scroll" href="/">  </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li><a href="{{route('admin.usuario.index')}}">Usuarios</a></li>
                    <li><a href="{{route('admin.tipo_hospedaje.index')}}">Tipos Hospedajes</a></li>
                    <li><a href="{{route('admin.rol.index')}}">Roles</a></li>
                    <li><a href="{{route('admin.donaciones.index')}}">Donaciones</a></li>
                </ul>
                @if(Auth::User())
                    <ul class="nav navbar-nav navbar-right">
                        @if(Auth::User()->hospedajes->count() ==0)
                            <li><a href="{{route('usuario.hospedaje.create')}}">Conviertete en anfitrion</a></li>
                        @endif
                        <li class="dropdown">
                            <a  class="dropdown-toggle btn btn-default btn-custom-iniciar text-color" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::User()->nombre .'  '. Auth::User()->apellido.'  '}}<span class="caret" ></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('#$%^#%&$') }}">Mis viajes</a></li>
                                <li><a href="{{ url('#%^#%') }}">Mis reservas</a></li>
                                <li><a href="{{route('usuario.perfil.index')}}">Mis Hospedajes</a></li>
                                <li><a href="{{ url('#%^#$^3#$%^#%') }}">Editar perfil</a></li>
                                <li><a href="{{route('usuario.donar.create')}}">Donar</a></li>
                                <li><a href="{{ url('/logout') }}">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                @else

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="{{url('/login')}}" class="btn btn-default btn-sm btn-custom-iniciar text-color">Iniciar Sesión</a></li>
                        <li><a href="{{url('/register')}}"class="btn btn-default btn-sm btn-custom-reg text-color">Regístrate</a></li>
                    </ul>
                @endif
            </div>
            <!-- /.navbar-collapse -->


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
