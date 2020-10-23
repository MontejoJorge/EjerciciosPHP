<!-- 13. Crea dos arrays, uno con 4 tipos de animales ($animales) y otro con 4
nombres de colores ($colores).
■ Calcula el número de elementos de cada array.
■ Añade un elemento al final del array $animales utilizando una función.
■ Añade un elemento al principio del array $colores utilizando una función.
■ Crea un tercer array que incluya los elementos de los dos arrays. -->
<?php
    $animales = array("Leon","Cebra","Chocobo","Gromp");

    $colores = array("Rojo", "Amarillo", "Verde", "Negro");

    echo count($animales);
    echo count($colores);

    array_push($animales,"Leopardo");
    echo count($animales);

    array_unshift($colores, "Azul");
    echo count($animales);

    $all = array_merge($animales,$colores);
    echo count($all);