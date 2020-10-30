<?php 
    require_once "e05.datos.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="e05.compra.view.php" method="get">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Descipcion</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
            <?php
            foreach ($productos as $id => $producto) {
            ?>
            
            <tr>
                <td><?= $producto['nombre'] ?></td>
                <td><?= $producto['descripción'] ?></td>
                <td><?= $producto['precio'] ?></td>
                <td><input type='number' name='<?= $id ?>' value='0' required></td>
            </tr>

            <?php
            }
            ?>
        </table>
        <input type="submit" value="Comprar">
    </form>
</body>
</html>