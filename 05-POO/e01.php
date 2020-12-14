<?php

use Ejercicio2\Models\Publicacion;

require "./models/Publicacion.php";

$publicacion = new Publicacion();

$publicacion->setTexto("esto es un libro que ");

$publicacion->escribir("cuenta la historia de un heroe");

echo $publicacion->getTexto();