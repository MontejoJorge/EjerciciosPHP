<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="e02.php" method="get">
    <input type="text" name="num1" id="num1">
    <select name="operacion">
        <option value="suma">+</option>
        <option value="resta">-</option>
        <option value="multiplicacion">x</option>
        <option value="division">÷</option>
    </select>
    <input type="text" name="num2" id="num2"><br>
    <input type="submit" value="Calcular"><br>

    </form>
    <p id="resultado">El resultado es <?= calculate()?></p>
</body>
</html>