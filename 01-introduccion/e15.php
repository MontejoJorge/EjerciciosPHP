<!-- 15. Crea un array multidimensional llamado “diccionario” que almacene para
cada usuario su nombre, apellidos e email. A continuación crea una función
llamada “getDatos()” que reciba como primer parámetro el nombre de
usuario y como segundo parámetro el dato a obtener (“nombre”, “apellidos” o
“email”) y lo muestre por pantalla.
getDatos($diccionario,“jvadillo”,”email”) → jvadillo@egibide.org -->
<?php
$diccionario = array (
    "Jorge" => array (
        "apellido" => "Montejo",
        "email" => "jorge@jorge.com",
        "telefono" => "666"
    )
    );

function getDatos($diccionario,$nombre,$dato) {
    return $diccionario[$nombre][$dato];
}

echo getDatos($diccionario,"Jorge","email");

?>