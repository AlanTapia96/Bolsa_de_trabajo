<?php

 include('../database.php');


 $cuit = $_POST['cuit'];

 /*Validación de duplicidad de empresas por cuit*/
 $query = "SELECT * FROM empresas WHERE `cuit` = '$cuit'";
 $result =  mysqli_query($connection,$query);
 $rows = mysqli_num_rows($result);


 if($rows == 0){

        $nombre = $_POST['nombre'];
        $provincia =$_POST['provincia'];
        $localidad = $_POST['localidad'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $mail = $_POST['mail'];
        

        /*Inserto datos de la empresa en tabla empresa*/
        $insert1 = "INSERT INTO empresas (`idEmp`,`nombre`,`cuit`,`provincia`,`localidad`,`direccion`,`telefono`,`mail`) VALUES(null,'$nombre','$cuit','$provincia','$localidad','$direccion','$telefono','$mail')"; 

        $result = mysqli_query($connection,$insert1);
        if(!$result){
            echo "Error: " . $insert1 . "<br>" . $connection->error;
        }else{
            echo "Registro satisfactorio!";
        };
        
 }else{
    echo "La empresa ya se encuentra registrado";
  };

 $connection->close();

?>
