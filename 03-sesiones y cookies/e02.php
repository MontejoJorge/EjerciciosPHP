<?php
$user = $_GET["name"];

setcookie("user",$user);

$user = $_COOKIE["user"];

require "e01.view.php";

if (isset($_GET["borrar"])=="true") {
    setcookie("user", NULL, -1);
}