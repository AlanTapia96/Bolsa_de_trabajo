<?php

  include('database.php');

  /*Valido mediante el nro de documento si el alumno ya se encuentra registrado*/
  $numDocumento = $_POST["numDocumento"];

  $query = "SELECT * FROM alumnos WHERE `numDoc` = '$numDocumento'";
  $result =  mysqli_query($connection,$query);
  $rows = mysqli_num_rows($result);
  
  if($rows == 0){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $nacimiento = $_POST["nacimiento"];
    $tipoDocumento = $_POST["tipoDocumento"];
    $telefono = $_POST["telefono"];
    $mail = $_POST["mail"];
    $carrera = $_POST["carrera"];
    $año = $_POST["año"];
    $experiencia = $_POST["experiencia"];
    $habilitado = $_POST["habilitado"];


    $insert = "INSERT INTO `alumnos` (`nombre`, `apellido`, `nacimiento`, `tipoDoc`, `numDoc`, `telefono`, `mail`, `carrera`, `año`, `habilitado`,  `experiencia`) VALUES ('$nombre','$apellido','$nacimiento','$tipoDocumento','$numDocumento','$telefono','$mail','$carrera','$año','$habilitado','$experiencia')";

    $result = mysqli_query($connection,$insert);

    if(!$result){
      echo "Error: " . $insert . "<br>" . $connection->error;
    }else{
      echo "Registro satisfactorio!";
    }
  }else{
    echo "El alumno ya se encuentra registrado";
  } 

    
    $connection->close();

?>