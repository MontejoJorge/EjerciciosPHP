<!-- 22. Crea un array con nombres de países y a continuación una función que reciba
el nombre de un país y recorra el array, comprobando valor por valor si alguno de
ellos es igual al del parámetro recibido. Devolverá la posición en la que se
encuentre (en caso de no encontrarlo devolverá -1)..
[“Brasil”, “Portugal”, “Islandia”, “Mexico”, “Filipinas”, “Marruecos”]
encuentraPosicion(“Islandia”) → 3
encuentraPosicion(“Dinamarca”) → -1
Nota: Puedes utilizar la función count() para conocer el tamaño del array que debes recorrer. -->

<?php
    $paises = ["España","Portugal","Francia","Alemania"];

    function posicion($paises, $pais){
        for ($i=0; $i < count($paises) ; $i++) { 
            if ($paises[$i]==$pais){
                return $i+1;
            }
        }
        return -1;
    }

    echo posicion($paises,"Francia");

?>