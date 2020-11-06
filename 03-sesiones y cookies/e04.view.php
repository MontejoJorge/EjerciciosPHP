<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Lista de asistentes</h3>
    <ul>
        <?php
            if (count($asistentes)>0){
            foreach ($asistentes as $asistente) {
            ?>    
                <li><?=$asistente?></li>
            <?php
            }
        }
        ?>
    </ul>
    <form action="e04.php" method="get">
        <input type="text" name="name">
        <input type="hidden" name="accion" value="insertar">
        <input type="submit" value="Añadir">
    </form>
        <a href="e04.php?accion=borrar">Borrar</a>

    
</body>
</html>