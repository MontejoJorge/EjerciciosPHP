<?php 
if (isset($_GET["languaje"])) {
    $languaje = $_GET["languaje"];
    setcookie("languaje",$languaje);
}

$languaje = $_COOKIE["languaje"];

require "e03.view.php";