<!-- 11. Separa el código del ejercicio anterior en dos archivos distintos. Uno de ellos
tendrá todo el contenido relacionado con la presentación de la página y el otro
deberá contener todo aquello relacionado con los datos y la lógica de la
aplicación -->

<?php
function cadena($a, $b = 'cadena por defecto')
{
    $concat = $a . " " . $b;
    return $concat;
}
$a = "cadena a";
$b = "cadena b";

$frase = cadena($a,$b);
include "e11.view.php";