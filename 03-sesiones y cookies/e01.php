<?php
$user = $_GET["name"];

setcookie("user",$user);

$user = $_COOKIE["user"];

require "e01.view.php";