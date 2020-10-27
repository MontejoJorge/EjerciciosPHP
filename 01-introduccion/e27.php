<!-- 27. Crea un array con el nombre de 8 grupos de música y una función que
imprima por pantalla todos los elementos utilizando la estructura foreach. -->
<?php

$grupos = ["ACDC", "Platero y tu", "Berri Txarrak", "Bob Marley $ The Wailers", "Foo Fighters", "Muse", "Sutagar", "Kortatu"];

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

generarListado($grupos);