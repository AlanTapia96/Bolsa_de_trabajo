<?php

    include('../database.php');
    
    session_start();

    if($_SESSION['user'] == 'admin'){

        $id = $_POST['id'];
        $action = $_POST['action'];
    
        if($action == 'A'){
            $query = "UPDATE alumnos Set `habilitado` ='true' where `numDoc` = '$id'";
            $result = mysqli_query($connection,$query);
            if(!$result){
                die('Error al ejecutar la query');
            }else{
                echo "modificación satisfactoria";
            }
        }else{
            $query = "DELETE from alumnos where `numDoc` = '$id'"; /*En caso de no aceptar al alumno, el mismo es elimnado de la base de datos*/
            mysqli_query($connection,$query);
            echo "modificacion satisfactoria";
        }
    }else{
        echo "Usted no tiene acceso";
    }

    $connection->close();
?>