<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="e04.php" method="get">
        <input type="text" name="name" placeholder="nombre">
        <input type="text" name="pass" placeholder="contraseña">
        <input type="submit" value="Login">
    </form>
    <p><?= validate($usuarios)?></p>
</body>
</html>