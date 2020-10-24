<!-- 20. Modifica el programa anterior para que sume únicamente los números pares. -->
<?php

function suma($num){
    $suma = 0;
    for ($i=0; $i <= $num; $i++) { 
    if ($i%2==0) {
        $suma += $i;
    }
    }
    return $suma;
}

echo suma(10);

?>