<!-- 01. Crea un convertidor de grados Celsius a Farenheit (y viceversa). La aplicación
pedirá una cantidad al usuario y la unidad mediante un formulario. Una vez enviado,
mostrará el resultado de la conversión realizada. El formulario siempre se mostrará,
de forma que el usuario pueda seguir introduciendo valores. -->
<?php

function calculate()
{
    if (isset($_GET["temp"])) {
        $temp = $_GET["temp"];

        $type = $_GET["type"];
        switch ($type) {
            case "celsius":
                echo toFahrenheit($temp) . "ºF";
                break;

            case "fahrenheit";
                echo toCelsius($temp) . "ºC";
                break;
        }
    } else {
        $temp = null;
    }
}

function toCelsius($temp)
{
    return ($temp - 32) * 5 / 9;
}
function toFahrenheit($temp)
{
    return ($temp * 9 / 5) + 32;
}

require "e01.view.php";
