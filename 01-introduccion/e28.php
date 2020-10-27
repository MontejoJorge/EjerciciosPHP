<!-- 28. Modifica el ejercicio número 26 para obtener el mismo resultado empleando
una estructura foreach.  -->
<?php

$marcas = ["Audi", "Seat", "Mercedes", "Volskwagen", "BMW", "Fiat"];

function generarElemento($elemento) {
    return "<li>$elemento</li>";
}

function generarListado($elementos) {
    $lista = "<ul>";
    foreach ($elementos as $elemento){
        $lista .= generarElemento($elemento);
    }
    return $lista."</ul>";
}

generarListado($marcas);