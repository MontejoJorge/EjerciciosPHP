<!-- 02. Crea una aplicación que simule una calculadora. 
La calculadora estará representada por un formulario con dos campos 
numéricos y un desplegable para indicar la operación que se desea realizar 
(suma, resta, multiplicación o división). La aplicación deberá mostrar el
resultado de la operación realizada y mostrar un mensaje de error cuando se
intente dividir entre cero. -->
<?php
function calculate(){
    $n1 = $_GET["num1"];
    $o = $_GET["operacion"];
    $n2 = $_GET["num2"];

    switch ($o){
        case "suma":
            return $n1 + $n2;
        break;
        case "resta":
            return $n1 - $n2;
        break;
        case "multiplicacion":
            return $n1 * $n2;
        break;
        case "division":
            return $n1 / $n2;
        break;
    }
}

require "e02.view.php";