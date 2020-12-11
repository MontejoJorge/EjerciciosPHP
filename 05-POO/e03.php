<?php
//require "./models/Triangulo.php";
require "./models/Cuadrado.php";

$pol = new Cuadrado;
$pol-> setAltura(10);
$pol-> setAnchura(5);
$pol-> calcularArea();