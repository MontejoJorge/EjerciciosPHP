<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "./models/Publicacion.php";

use Ejercicio2\Models\Publicacion;

$publicacion = new Publicacion();

$publicacion->setTexto("esto es un libro que ");

$publicacion->escribir("cuenta la historia de un heroe");

echo $publicacion->getTexto();