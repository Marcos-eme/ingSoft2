<div class="container-fluid">

    @if($donaciones->count()>0)
        <div class="col-md-12" style="padding: 50px">
            <p>
                 <td>{{"Monto" . " ---- " . "Fecha"}}</td>
                @foreach($donaciones as $donacion)
                    <div>
                <tr>
                    <td>{{$donacion->monto}}{{"     -----> " . $donacion->created_at}}</td>
                </tr>
                    </div>
                @endforeach
            </p>
        </div>

    @else
        <div class="col-md-12" style="padding: 50px">
            <p>¡Aún no has hecho ninguna donación!</p>
        </div>
        <a href="{{route('usuario.donar.create')}}" class="btn btn-success" >¡Donar!</a>

    @endif

</div>