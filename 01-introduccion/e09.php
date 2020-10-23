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
        $b = "cadena b";

    echo cadena($a,$b);


    function cadena($a,$b){
      $concat = $a ." ". $b;
      return $concat;
    }




?>
</body>
</html>