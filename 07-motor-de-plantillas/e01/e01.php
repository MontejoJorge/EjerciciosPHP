<?php
require "./vendor/autoload.php";
use duncan3dc\Laravel\Blade;


$nombre="Jorge";

echo Blade::render("name",["nombre"=>$nombre]);