<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_GET["idProducto"])){
        $idProducto=$_GET["idProducto"];
        require_once "e07.datos.php";
        ?>
        <h1><?= $productos[$idProducto]["nombre"] ?></h1>
        <h2><?="Id: ".$idProducto?></h2>
        <p><?= $productos[$idProducto]["descripción"] ?></p>
    <?php
    }
    ?>
    <a href="e07.php">Volver</a>
</body>
</html>