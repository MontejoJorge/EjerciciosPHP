<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1px">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Edad</th>
        </tr>
        <?php

        require_once "base.php";

        $dbh = connect();
        $stmt = $dbh->query("SELECT * FROM alumno;");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        while ($row=$stmt->fetch()) {
        ?>
        <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["nombre"]?></td>
            <td><?=$row["apellidos"]?></td>
            <td><?=$row["email"]?></td>
            <td><?=$row["edad"]?></td>
        </tr>
        <?php
        }

        ?>
    </table>
</body>

</html>