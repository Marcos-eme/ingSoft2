<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/">CouchInn</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
                        <li><a href="{!!return view('donner.donar')!!}">Donar</a></li>  //HACER LA RUTA
                        <li><a href="{{ url('/logout') }}">Salir</a></li>

                    </ul>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/login')}}">Iniciar Sesión</a></li>
                    <li><a href="{{url('/register')}}">Regístrate</a></li>
                </ul>
            @endif
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>