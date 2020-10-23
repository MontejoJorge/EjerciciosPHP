<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = $_GET["a"];
        $b = $_GET["b"];

        echo "Resta: " . $a-$b."<br>";
        echo "Division: " . $a/$b."<br>";
        echo "A mayor que B:" . var_export($a>$b)."<br>";


?>
</body>
</html>