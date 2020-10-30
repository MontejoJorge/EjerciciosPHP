<!-- 04. Crea una pantalla de login con dos campos:
usuario y contraseña. El programa deberá
validar los datos de acceso contra un diccionario
de datos como el de la imagen. El programa
deberá mostrar un mensaje de bienvenida con
su nombre y apellidos en caso de que los datos
sean correctos.
También indicará si el usuario introducido no
existe o si la contraseña introducida es
incorrecta. -->
<?php
$usuarios = array(
    "user1" => array (
    "nombre" => "Ane",
    "apellidos" => "López",
    "password" => "123Abc"
    ),
    "user2" => array (
    "nombre" => "Amaia",
    "apellidos" => "Otsoa",
    "password" => "456Xyz"
    )
   );

function validate($usuarios){
    $name = $_GET["name"];
    $pass = $_GET["pass"];

    if (array_key_exists($name,$usuarios)) {
        if ($usuarios[$name]["password"]==$pass) {
            return "$name ha sido logeado con exito";
        } else {
            return "contraseña incorrecta";
        }
    } else {
        return "$name no encontrado";
    }

}

require "e04.vew.php";
