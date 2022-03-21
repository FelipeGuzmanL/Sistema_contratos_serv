<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Contratos</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>



    <?php require 'partials/header.php' ?>   

    <h1>Ingrese sus datos</h1>
    <!-- Hola -->
    <form action="sesion.php" method="post">
       <input type="text" name="email" placeholder="Ingresa tu Email">
       <input type="password" name="password" placeholder="Ingesa tu contraseña"> 
       <input type="submit" value="Iniciar Sesión">
    </form>

</body>
</html>