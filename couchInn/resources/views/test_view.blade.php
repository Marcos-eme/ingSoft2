<html>
<body>
hola vieja como andas guachin

<h1>
    {{"hola ".$variable->nombre}}
</h1>
<h2>{{"hospedajes: "}} <br></h2>
<h3>
   @foreach($variable->hospedajes as $hospedaje)
       {{'provincia:'}}
        {{$hospedaje->provincia}}<br>
        {{'ciudad:'}}
        {{$hospedaje->ciudad}}<br>
        {{'calle:'}}
        {{$hospedaje->calle}}<br>
        {{'numero:'}}
        {{$hospedaje->numero}}

    @endforeach
</h3>
<?php

    echo ("El nombre es: ".$variable->nombre." y el apellido es:". $variable->apellido);
    dd($variable);
?>

</body>
</html>


