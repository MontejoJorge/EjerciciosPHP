<?php
session_start();

function iniciarArray(){
    if(!isset($_SESSION["names"])){
        $_SESSION["names"]=array();
    }
    return $_SESSION["names"];
}

function accion($accion){
    switch ($accion) {
        case 'insertar':
            if (isset($_GET["name"])){
                $asistente = $_GET["name"];
                array_push($_SESSION["names"],$asistente);
            }
            break;
        case 'borrar':
            unset($_SESSION["names"]);
            break;
    }
}



if (isset($_GET["accion"])){
    $accion = $_GET["accion"];
    accion($accion);
}

$asistentes = iniciarArray();

require "e04.view.php";