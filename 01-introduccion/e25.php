<!-- 25. Crea un array con un listado de estudiantes (Ane, Markel, Nora, Danel, Amaia, Izaro). A
continuación recorre el array utilizando una estructura de control WHILE generando una lista
HTML como la siguiente: -->

<?php

$estudiantes = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];

function generarElementos($elemento){
    return "<li>$elemento</li>";
}

function generarListado($elementos){
    $lista = "<ul>";
    $index = 0;
    while ($index<count($elementos)) {
        $lista .= generarElementos($elementos[$index]);
        $index++;
    }
    return $lista."</ul>";
}

echo generarListado($estudiantes);

?>