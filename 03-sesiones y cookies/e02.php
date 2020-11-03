<?php
$user = $_GET["name"];

setcookie("user",$user);

$user = $_COOKIE["user"];

if (isset($_GET["borrar"])=="true") {
    setcookie("user", NULL, -1);
}

require "e02.view.php";