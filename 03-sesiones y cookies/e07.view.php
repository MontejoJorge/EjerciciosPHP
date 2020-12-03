<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cesta</h2>

    <?php
    if (count($_SESSION["cesta"])>0){
        ?>
        <ul>
        <?php
            foreach ($_SESSION["cesta"] as $idProducto) {
                ?>
                    <li><?=$productos[$idProducto]["nombre"] ?></li>
               <?php 
            }

        ?>
        </ul>
        <p><?= "Precio total: ".$precioTotal?></p>
        <a href="e07.php?accion=vaciar">Comprar</a>
    <?php
    } else {
    ?>
    <p>La cesta esta vacia</p>
    <?php
    }
    ?>


    <h5>Catalogo de productos</h5>
    <table border="1px"> 
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Detalle</th>
            <th>Favoritos</th>
        </tr>
        <?php
        foreach ($productos as $id => $producto){
            ?>
            <tr>
                <td><?="style=color:".esFavorito($id).";"?></td>
                <td <?="style='color:'".esFavorito($id).";"?>><?= $producto["nombre"] ?></td>
                <td><?= $producto["descripción"] ?></td>
                <td><?= $producto["precio"] ?></td>
                <td><a href="e07.php?accion=insertar&idProducto=<?=$id?>">Comprar</a></td>
                <td><a href="e07.detalle.php?idProducto=<?=$id?>">Ver detalles</a></td>
                <td><a href="e07.php?accion=favorito&idProducto=<?=$id?>">Favorito</a></td>
            </tr>
            
        <?php
        }
        ?>
    </table>

</body>
</html>