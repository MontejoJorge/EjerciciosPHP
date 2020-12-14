<?php

function areaCuadrado($lado1,$lado2){
    if ($lado1<=0||$lado2<=0){
        throw new Exception("No puedes poner lados negativos o iguales a 0");
    }
    return $lado1*$lado2;
}

try {
    echo areaCuadrado(4,3);
} catch (Exception $e){
    echo $e->getMessage();
}