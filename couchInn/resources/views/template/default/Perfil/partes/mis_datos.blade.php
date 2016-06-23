<div class="container-fluid">
    <h3>Nombre</h3>
    {{Auth::User()->nombre}}
    <h3>Apellido</h3>
    {{Auth::User()->apellido}}
    <h3>Mail</h3>
    {{Auth::User()->email}}
    @if($hospedajes->count()>0)
          <h3>Descripcion</h3>
    @endif
    <a href="#" class="btn btn-success">Editar perfil</a>

    </table>
</div>