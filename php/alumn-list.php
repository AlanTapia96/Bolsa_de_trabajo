<?php

    include('database.php');

    $query = "SELECT `nombre`, `apellido`, `nacimiento`, `tipoDoc`, `numDoc`, `telefono`, `mail`, `carrera`, `año`, `experiencia` FROM alumnos WHERE `habilitado` = 'true'";


    $respuesta = mysqli_query($connection,$query);

    if(!$respuesta){
        die('Falló la consulta' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($respuesta)){
        $json[] = array(
            'nombre' => $row['nombre'] ,
            'apellido' => $row['apellido'] ,
            'tipoDoc' => $row['tipoDoc'] ,
            'nacimiento' => $row['nacimiento'] ,
            'numDoc' => $row['numDoc'],
            'telefono' => $row['telefono'],
            'mail' => $row['mail'],
            'carrera' => $row['carrera'],
            'año' => $row['año'],
            'experiencia' => $row['experiencia']
        );
    }

    $jsonString = json_encode($json);
    echo $jsonString;
     

?>