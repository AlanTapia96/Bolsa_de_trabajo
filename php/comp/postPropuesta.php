<?php 

    include('../database.php');

    $cuit = $_POST['cuit'];

    /*Validación de existencia de la empresa por cuit*/
    $query = "SELECT * FROM empresas WHERE `cuit` = '$cuit'";
    $result =  mysqli_query($connection,$query);
    $rows = mysqli_num_rows($result);


    if($rows == 1){
        $propuesta = $_POST['propuesta'];
        $fecha_ini = $_POST['fecha_ini'];
        $fecha_fin = $_POST['fecha_fin'];
        $habilitado = 'false';
    
    
        /**Obtengo el ID con el que fue creada la empresa */
        $consultaID = "SELECT `idEmp` FROM empresas where `cuit` = '$cuit'";
        $result = mysqli_query($connection,$consultaID);
    
        if(!$result){
            echo "Error: " . $result . "<br>" . $connection->error;
        }       
    
        $fila = mysqli_fetch_array($result);
        $idEmp = $fila['idEmp'];
    
    
        /* Inserto datos de la propuesta laboral en la tabla propuestas */
        $insert2 = "INSERT INTO `propuestas` (`idEmp`,`idPropuesta`,`propuesta`,`fecha_ini`,`fecha_fin`,`habilitado`) VALUES ('$idEmp',null,'$propuesta','$fecha_ini','$fecha_fin','$habilitado')"; 
    
        $result = mysqli_query($connection,$insert2);
        if(!$result){
            echo "Error: " . $insert1 . "<br>" . $connection->error;
        }else{
            echo "Registro satisfactorio!";
        };
    }else{
        echo "Primero debe registrar a la empresa";
    }

    

?>