<?php
session_start();

$datos = [
    "Jorge" => [
        "username" => "Jorge",
        "password" => "1234"
    ],
    "Pedro" => [
        "username" => "Pedro",
        "password" => "12345"
    ]
];

function validate($username,$password,$datos){
    if (array_key_exists($username,$datos)) {
        if ($datos[$username]["password"]==$password) {
            $_SESSION["user"]=$username;
            require "e05.home.php";
            die();
        } else {
            $error = "Contraseña incorrecta";
        }
    } else {
        $error = "El usuario no existe";
    }
}

if (isset($_GET["username"]) && isset($_GET["password"])) {
    validate($_GET["username"],$_GET["password"],$datos);
}

require "e05.view.php";