<!-- 16. Crea una función que reciba 2 números obtenidos mediante GET. La aplicación
deberá realizar la siguiente operación:
● Si los números son distintos, mostrará el resultado de su suma.
● Si los números son iguales, mostrará el resultado de su multiplicación. -->
<?php

$a = 3;

$b = 3;

if ($a!=$b) {
    echo $a+$b;
}else {
    echo $a*$b;
}

?>