<?php

    include('database.php');
    $search = $_POST["search"];
    
    if(!empty($search)){
        $query = "SELECT `nombre`, `apellido`, `nacimiento`, `tipoDoc`, `numDoc`, `telefono`, `mail`, `carrera`, `año`, `experiencia`, `habilitado` FROM alumnos where habilitado = 'true' and (nombre like '%$search%' or apellido like '%$search%')";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die("Error de consulta" . mysqli_error($connection));
        }

        $json = array();
        while($row = mysqli_fetch_array($result)){ //todo lo encontrado lo llevo a un array
            $json[] = array(
                'nombre' => $row['nombre'],
                'apellido' => $row['apellido'],
                'nacimiento' => $row['nacimiento'],
                'tipoDoc' => $row['tipoDoc'],
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
        

    };

    
    


?>