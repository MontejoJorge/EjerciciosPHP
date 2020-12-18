<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "vendor/autoload.php";

use Models\Zapatilla;
use duncan3dc\Laravel\Blade;

$zapatillas = [];

for ($i =0; $i<10; $i++){
    $zapatilla = new Zapatilla("Adidas","Messirve","Furbol",89);
    array_push($zapatillas, $zapatilla);
}

echo Blade::render("tienda",["zapas"=>$zapatillas]);