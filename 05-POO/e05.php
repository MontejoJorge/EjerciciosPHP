<?php

require "./models/Persona.php";

use models\Persona;

echo "total de personas: " . Persona::$personasEnElMundo . "<br>";

$per1 = new Persona();
$per2 = new Persona();
$per3 = new Persona();

echo "total de personas: " . Persona::$personasEnElMundo . "<br>";
echo "total de personas: " . $per3->getPersonasEnElMundo();