<!-- 19. Crea un programa que reciba un número y realice la suma de todos los
números entre el 0 y el número dado (este incluido). Deberá mostrar el resultado. -->
<?php

function suma($num){
    $suma = 0;
    for ($i=0; $i <= $num; $i++) { 
        $suma += $i;
    }
    return $suma;
}

echo suma(9);

?>