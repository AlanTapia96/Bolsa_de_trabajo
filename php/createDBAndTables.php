<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';

    $newConection = new mysqli($server,$user,$password);

    if ($newConection->connect_error) {
        die("Connection failed: " . $newConection->connect_error);
    }

    $createDB = 'CREATE DATABASE Bolsa_de_trabajo';
    
    if($newConection->query($createDB) === TRUE){
        echo "Base de datos creada satisfactoriamente\n ";
    }else{
        echo "Error al crear la Base de Datos";
    }

    $database = 'bolsa_de_trabajo';
    $conection = mysqli_connect($server,$user,$password,$database);


    $sql = "CREATE TABLE IF NOT EXISTS alumnos (
        nombre VARCHAR(50) NOT NULL,
        apellido VARCHAR(50) NOT NULL,
        nacimiento VARCHAR(50),
        tipoDoc VARCHAR(20),
        numDoc INT PRIMARY KEY,
        telefono INT,
        mail VARCHAR(50),
        carrera VARCHAR(50),
        año INT,
        experiencia TEXT,
        habilitado VARCHAR(10))";

      

      if (mysqli_query($conection, $sql)) {
        echo "TablA alumns creada satisfactoriamente\n ";
      } else {
        echo "Error creating table: " . mysqli_error($conection);
      }


      $sql2 = "CREATE TABLE IF NOT EXISTS admin_user(
        user VARCHAR(20) NOT NULL PRIMARY KEY,
        password VARCHAR(20)
      )";

      if(mysqli_query($conection,$sql2)){
        echo "Tabla admin_user creada satisfactoriamente\n ";
      }else{
        echo "Error creating table: " . mysqli_error($conection);
      }
        
     

      $insert = "INSERT INTO `admin_user` (`user`, `password`) VALUES ('admin', 'Jauretche123')";
      if(mysqli_query($conection,$insert)){
        echo "Usuario admin creado";
      }else{
        echo "Usuario admin no creado";
      };



      $sql3 = "CREATE TABLE IF NOT EXISTS empresas(
        idEmp int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(50),
        cuit bigint not null,
        provincia VARCHAR(50),
        localidad VARCHAR(50),
        direccion VARCHAR(50),
        telefono int,
        mail VARCHAR(20)
      )";

      if(mysqli_query($conection,$sql3)){
        echo "Tabla empresas creada satisfactoriamente\n ";
      }else{
        echo "Error creating table: " . mysqli_error($conection);
      };

      $sql4 = "CREATE TABLE IF NOT EXISTS propuestas(
        idEmp int NOT NULL,
        idPropuesta int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        propuesta TEXT not null,
        fecha_ini date,
        fecha_fin date,
        habilitado VARCHAR(10)
        )";

      if(mysqli_query($conection,$sql4)){
        echo "Tabla propuestas creada satisfactoriamente\n ";
      }else{
        echo "Error creating table: " . mysqli_error($conection);
      };



?>