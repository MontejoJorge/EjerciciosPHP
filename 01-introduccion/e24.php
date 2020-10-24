<!-- 24. Crea un array multidimensional que simule una agenda de contactos (contendrá de cada
persona su nombre, apellidos, teléfono y dirección de correo electrónico). Implementa una
función que imprima en una tabla los datos de las personas utilizando la sentencia for.
Nota: Puedes utilizar la función count() para conocer el tamaño del array que debes recorrer. -->

<?php
$agenda = [
    ["nombre" => "Amaia", "apellidos"=>"Gorbea Jainaga", "telefono"=>"945111111", "email"=>"agorbea@php.net"],
    ["nombre" => "Ane", "apellidos"=>"Larrain Ogueta", "telefono"=>"945222222", "email"=>"alarrain@php.net"],
    ["nombre" => "Maite", "apellidos"=>"Murgiondo Lekue", "telefono"=>"945333333", "email"=>"mmurgiondo@php.net"],
    ["nombre" => "Lorea", "apellidos"=>"Aranceta Otxoa", "telefono"=>"945444444", "email"=>"laranceta@php.net"],
    ["nombre" => "Markel", "apellidos"=>"Gurrutxaga Abarra", "telefono"=>"945555555", "email"=>"mgurrutxaga@php.net"],
    ["nombre" => "Urtzi", "apellidos"=>"Iriondo Baiona", "telefono"=>"945666666", "email"=>"uiriondo@php.net"]
];

function gFila($nombre,$apellidos,$telefono,$email){
    return "<tr><td>$nombre</td><td>$apellidos</td><td>$telefono</td><td>$email</td></tr>";
}

function gTabla($agenda){
    $tabla = "<table border='1'";
    for ($i=0; $i < count($agenda) ; $i++) { 
        $tabla .= gFila(
            $agenda[$i]["nombre"],
            $agenda[$i]["apellidos"],
            $agenda[$i]["telefono"],
            $agenda[$i]["email"]);
    }
    return $tabla."</table>";
}

echo gTabla($agenda);

?>