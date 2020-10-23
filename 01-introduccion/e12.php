<!-- 12. Crea un array con 4 nombres de ciudades (Paris, Berlin, Amsterdam, Praga).
A continuación crea las siguientes funciones:
● getValor($array, $posicion) : recibe un número como parámetro y
devuelve el valor almacenado en el array en dicho índice.
● setValor($array, $posicion, $valor) : establece el valor del
elemento indicado en la posición y devuelve el array.
Crea algunos ejemplos con llamadas a las dos funciones. -->
<?php
    $ciudades = array('Paris','Berlin','Amsterdam','Praga');

    $valor = 'Madrid';

    echo getValor($ciudades,2);

    echo setValor($ciudades, 2, $valor);

    function getValor($ciudades, $posicion){
        return $ciudades[$posicion];

    }
    function setValor($ciudades, $posicion, $valor){
        $ciudades[$posicion] = $valor;
        return $ciudades[$posicion];
    }


?>