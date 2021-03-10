<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bola de trabajo - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body class="login-body">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <h1 class="text-center mt-5 text-white">Log in</h1> 
        </div>
        <div class="row mt-4 col-md-6 mr-auto ml-auto">
            <form action="validateAdmin.php" method="POST" class = "text-center w-100">
                <div class="form-group w-100">
                    <input type="text" placeholder="Ingrese el usuario" name="usuario" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Ingrese la contraseña" name="contraseña" class="form-control">
                </div>
    
                <input type="submit" value="Ingresar" class="btn btn-primary btn-lg btn-block">
            
            </form>
        </div>
        
        
    </div>




<script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>