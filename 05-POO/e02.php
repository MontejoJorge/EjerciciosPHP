<?php

include "models/Publicacion.php";

use poo\models\Pulicacion;

require "Publicacion.php";

$publicacion = new Publicacion();

$publicacion->setTexto("esto es un libro que ");

$publicacion->escribir("cuenta la historia de un heroe");

echo $publicacion->getTexto();