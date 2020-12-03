<?php
session_start();

$datos = [
    "jorge" => [
        "username" => "jorge",
        "password" => "1234",
        "apellido" => "Montejo"
    ],
    "pedro" => [
        "username" => "pedro",
        "password" => "12345",
        "apellido" => "Perez"
    ]
];

$ERROR_TYPES = [
    1=>"El usuario o la contraseña no es correcto/a"
];

function validate($username,$password,$datos){
    if (array_key_exists($username,$datos)) {
        if ($datos[$username]["password"]==$password) {
            $_SESSION["user"]=$username;
            return 0;
        } else {
            return 1;
        }
    } else {
        return 1;
    }
}
if (!isset($_SESSION["login"]) || isset($_GET["action"])){
    $_SESSION["login"] = -1;
    $_SESSION["usuario"]="";
}

if (isset($_GET["username"]) && isset($_GET["password"])) {
    $_SESSION["login"] = validate($_GET["username"],$_GET["password"],$datos);
}
if ($_SESSION["login"]==0){
    $tupadre = $_SESSION["login"];
    $apellido = $datos[$_SESSION["user"]]["apellido"];
    require "e05.home.view.php";
} else {
    if($_SESSION["login"]!= -1){
        $error = $ERROR_TYPES[$_SESSION["login"]];
        echo "intentos: ".$_SESSION["intentos"]=$_SESSION["intentos"]+1;
        require "e05.view.php";
    }else {
        require "e05.view.php";
    }
}