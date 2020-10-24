<!-- 18. Crea una función que reciba un número indicando el día de la semana y que
muestre por pantalla el día de la semana. En caso de recibir otro número que no
esté entre el 1 y el 7, mostrará el mensaje “No es ningún día de la semana". Utiliza
un switch para realizar el ejercicio.
diaSemana(2) → “El día número 2 es martes.”
diaSemana(9) → “No es ningún día de la semana” -->

<?php
$dia = 3;
function mostrarDia($dia)
{
    switch ($dia) {
        case 1:
            return "lunes";
            break;
        case 2:
            return "martes";
            break;
        case 3:
            return "miercoles";
            break;
        case 4:
            return "jueves";
            break;
        case 5:
            return "viernes";
            break;
        case 6:
            return "sabado";
            break;
        case 7:
            return "domingo";
            break;
        default:
            return "No es ningun dia de la semana";
            break;
    }
}

echo mostrarDia($dia);


?>