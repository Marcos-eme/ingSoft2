<div class="container-fluid">
    @if($hospedajes->count()>0)
        <div class="col-md-12" style="padding: 50px">
            <p>¡Aún no has hecho ninguna donación!</p>
        </div>

    @else
        <div class="col-md-12" style="padding: 50px">
            <p>¡Aún no has hecho ninguna donación!</p>
        </div>
        <a href="{{route('usuario.donar.create')}}" class="btn btn-success" >¡Donar!</a>

    @endif

</div>