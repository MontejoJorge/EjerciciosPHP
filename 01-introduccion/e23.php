<!-- 23. Crea un array con un listado de estudiantes (Ane, Markel, Nora, Danel, Amaia, Izaro). A
continuación recorre el array mediante un FOR, generando una lista HTML como la siguiente: -->

<?php
    $estudiantes = ["Ane", "Markel", "Juan", "Amaia"];

    function verEstudiantes($estudiantes){
        for ($i=0; $i < count($estudiantes) ; $i++) { 
            echo "<li> $estudiantes[$i] </li>";
        }
    }

    verEstudiantes($estudiantes);


?>