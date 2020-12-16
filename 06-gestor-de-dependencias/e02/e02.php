<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require "vendor/autoload.php";
require "./models/Paciente.php";

$paciente1 = new Paciente("paco","gonzalez",43);




if (isset($_GET["accion"])){
    $accion = $_GET["accion"];
    if ($accion=="enfermar"){
        $paciente1->enfermar();
    } else {
        $paciente1->curar();
    }

}

?>

<a href="e02.php?accion=enfermar">Enfermar</a>
<a href="e02.php?accion=Curar">Curar</a>
</body>
</html>