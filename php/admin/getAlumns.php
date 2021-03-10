<?php
    
    include('../database.php');
    
    session_start();

    if($_SESSION['user'] == 'admin'){
        $query = "SELECT `nombre`, `apellido`, `numDoc`, `telefono`, `mail`, `carrera`, `año`,`experiencia` FROM alumnos WHERE `habilitado` = 'false'";
        $result = mysqli_query($connection,$query);
        
        if(!$result){
            die('Falló la consulta' . mysqli_error($connection));
        }

        $json = array();
        while($row = mysqli_fetch_array($result)){
            $json[] = array(
                'nombre' => $row['nombre'] ,
                'apellido' => $row['apellido'] ,
                'numDoc' => $row['numDoc'],
                'telefono' => $row['telefono'],
                'mail' => $row['mail'],
                'carrera' => $row['carrera'],
                'año' => $row['año'],
                'experiencia' => $row['experiencia'],
            );
            
        }
        $jsonString = json_encode($json);
        echo $jsonString;
    }else{
        echo "Usted no tiene acceso";
        die();
    }
    

    $connection->close();


?>