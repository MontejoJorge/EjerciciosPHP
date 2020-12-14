<?php

function division($num1,$num2){
    if($num2==0){
        throw new Exception("no puedes dividir entre 0");
    }

    return $num1/$num2;
}

try {
    echo division(1,0);
} catch (Exception $e) {
    echo $e->getMessage();
}

