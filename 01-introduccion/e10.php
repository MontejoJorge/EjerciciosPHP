<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = "cadena a";
        
    echo cadena($a);

    function cadena($a,$b = 'cadena por defecto'){
      $concat = $a ." ". $b;
      return $concat;
    }
?>
</body>
</html>
