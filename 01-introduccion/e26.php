<!-- 26. Crea un array con marcas de coches y una función que imprima por pantalla
una lista con todos los nombres utilizando la sentencia do-while. -->
<?php

$coches = ["audi", "seat", "mercedes", "volkswagen", "bmw", "fiat"];

function generarElemento($elemento) {
    return "<li>$elemento</li>";
}

function generarLista($elementos) {
    $lista = "<ul>";
    $index = 0;
    do {
        $lista .= generarElemento($elementos[$index]);
        $index++;
    } while ($index<count($elementos));
    return $lista."</ul>";
}

echo generarLista($coches);

?>