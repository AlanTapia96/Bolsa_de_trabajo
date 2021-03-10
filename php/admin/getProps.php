<?php

 include('../database.php');

 session_start();

    if($_SESSION['user'] == 'admin'){
        $query = "SELECT empresas.nombre, empresas.cuit, empresas.provincia, empresas.localidad, empresas.direccion, empresas.telefono, empresas.mail, propuestas.propuesta, propuestas.fecha_ini,propuestas.fecha_fin FROM propuestas INNER JOIN empresas on propuestas.idEmp = empresas.idEmp WHERE `habilitado` = 'false'";

        $result = mysqli_query($connection,$query);

        if(!$result){
            die('Falló la consulta' . mysqli_error($connection));
        }else{
            $json = array();
            while($row = mysqli_fetch_array($result)){
                $json[] = array(
                    'nombre' => $row['nombre'],
                    'cuit' => $row['cuit'],
                    'provincia' => $row['provincia'],
                    'localidad' => $row['localidad'],
                    'direccion' => $row['direccion'],
                    'telefono' => $row['telefono'],
                    'mail' => $row['mail'],
                    'propuesta' => $row['propuesta'],
                    'fecha_ini' =>$row['fecha_ini'],
                    'fecha_fin' =>$row['fecha_fin'],                    
                );
            }
            $jsonString = json_encode($json);
            echo $jsonString;
        }
    }else{
        echo "Usted no tiene permisos";
    }
        
//empresa.nombre, empresa.provincia, empresa.localidad, empresa.direccion, empresa.telefono, empresa.mail, propuestas.propuesta, propuestas.fecha_ini,propuestas.fecha_fin
?>