<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?=$languaje?></p>
    <form action="e03.php" method="get">
    <select name="languaje">
        <option value="Castellano">Castellano</option>
        <option value="Euskera">Euskera</option>
    </select>
    <input type="submit" value="Guardar">
    </form>
</body>
</html>