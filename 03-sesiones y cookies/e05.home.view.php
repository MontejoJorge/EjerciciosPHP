<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Correcto 
    <?= $_SESSION["user"];?>
    <?= $apellido?>
    </h1>
    <form action="e05.php" method="get">
        <input type="hidden" name="action" value="logout">
        <input type="submit" value="cerrar sesion">
    </form>
</body>
</html>