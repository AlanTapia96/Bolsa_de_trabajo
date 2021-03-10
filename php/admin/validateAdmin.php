<?php

    include('../database.php');

    session_start();

    if(isset($_POST['usuario']) && isset($_POST['contraseña'])){
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        $consulta = "SELECT * FROM admin_user where user='$usuario' and password='$contraseña'";
        $resultado = mysqli_query($connection,$consulta);
        $filas = mysqli_num_rows($resultado);
        
        if($filas){
                $_SESSION['user'] = 'admin';
                header("location:home.php");
        }else{
                include("loginAdmin.php");
            ?>
            <h2 class="text-white text-center mt-5">ERROR EN LA AUTENTICACIÓN</h2>
            <?php
        }
    
        };
    



    mysqli_free_result($resultado);
    mysqli_close($connection);

?>