<!-- 17. Crea una función que reciba un usuario y contraseña mediante GET. La
aplicación deberá mostrar si el usuario existe, y en caso de existir si la contraseña
recibida es correcta. La validación se realizará contra un array multidimensional
como el siguiente:
$usuarios = [
 "user1" => [
 "nombre" => "Nora",
 "password" => "123123",
 "email" => "nora@php.net"
 ],
 ...
]; -->
<?php
$usuarios = [
    "user1" => [
        "nombre" => "jorge",
        "password" => "1234",
        "email" => "jorge@php.com"
    ],
    "user2" => [
        "nombre" => "unai",
        "password" => "1234",
        "email" => "unai@php.com"
    ]
    ];

function login($usuarios,$username,$password){
    if (!array_key_exists($username,$usuarios)) {
        return "el usuario no existe";
    }elseif ($password != $usuarios[$username]["password"]) {
        return "contraseña incorrecta";
    }
    return "Login correcto";
}

$username = "user1";
$password = "1234";

echo login($usuarios,$username,$password);

?>