<!-- 21. Modifica el programa anterior de forma que en el momento en el que la suma
sea mayor que 100, devuelva el último valor antes de superar 100. -->
<?php

function suma($num)
{
    $suma = 0;
    for ($i = 0; $i <= $num; $i++) {
        if ($suma+$i > 100) {
            return $suma;  
        }
        if ($i % 2 == 0) {
            $suma += $i;
        }
        
    }
    return $suma;
}

echo suma(100);

?>