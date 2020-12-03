<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Log In</h2>
    <form action="e05.php" method="get">
        <input type="text" name="username" placeholder="Nombre de usuario">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="submit" value="LogIn">
    </form>
    <?php
// Si hay algún mensaje de error lo mostramos:
if(isset($error)) {
    ?>
    <p style='color:red;'><?= $error ?></p>
<?php } ?>
</body>
</html>