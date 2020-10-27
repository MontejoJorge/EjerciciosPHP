<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="e01.php" method="get">
        <h3><p><?= calculate()?></p></h3>

        <label for="">Temperatura: </label>
        <input type="number" name="temp" id="temp"><br><br>

        <label for="">Unidad de medida</label>
        <select name="type" id="type">
            <option value="celsius">celsius</option>
            <option value="fahrenheit">fahrenheit</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>