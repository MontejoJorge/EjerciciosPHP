<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./vendor/autoload.php";

use Models\Zapatilla;
use duncan3dc\Laravel\Blade ;

$zapatilla = new Zapatilla("Adidas","Boost","Baloncesto","140");

echo Blade::render("tienda",["zapa"=>$zapatilla]);