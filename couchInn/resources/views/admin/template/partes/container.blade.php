<div class="container">
    <section id="main">
        <div class="col-md-12">
            <div class="row">
                <h1 class="text-center">@yield ('titulo_container','Tuhermana')</h1>
                <h1 class="text-center"></h1>
            </div>
            <br> <br>
            <div class="row">
                <div class="panel panel-info">
                    <div class="panel-body">
                        @include('flash::message')
                        @include('admin.template.partes.errores')
                        @yield('contenido_container')
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>