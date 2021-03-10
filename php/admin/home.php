<?php
    session_start();

    $userSession = $_SESSION['user'];

    if(!isset($userSession) || $userSession != "admin"){
        header('location:loginAdmin.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa de trabajo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">

        <h1>Panel de administración</h1>

        <button class="btn btn-dark"><a href="log_out.php" class="text-white text-decoration-none">Cerrar sesion</a></button>
            
        <h2 class="mt-5">ACEPTAR/RECHAZAR ALUMNOS</h2>
            <table class="table table-bordered table-lg table-responsive-lg mt-5">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Documento</th>
                            <th>Mail</th>
                            <th>Carrera</th>
                            <th>Año de carrera</th>
                            <th>Experiencia</th>
                            <th>Aceptar/Rechazar</th>
                        </tr>
                    </thead>
                    <tbody id="alumns"></tbody>
        
                </table>
                <hr />
            <div class="mt-5">

                <h2>ACEPTAR/RECHAZAR PROPUESTAS DE EMPRESAS</h2>
                <table class="table table-bordered table-lg table-responsive-lg mt-5">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Provincia</th>
                                <th>Localidad</th>
                                <th>Direccion</th>
                                <th>Teléfono</th>
                                <th>Mail</th>
                                <th>Propuesta</th>
                                <th>Fecha de inicio</th>
                                <th>Fecha de finalización</th>
                                <th>Aceptar/Rechazar</th>
                            </tr>
                        </thead>
                        <tbody id="propuestas"></tbody>
            
                    </table>
            </div>
       
    </div>

    
       
    
        


<script src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="../admin/js/funcionesAdmin.js"></script>
</body>
</html>