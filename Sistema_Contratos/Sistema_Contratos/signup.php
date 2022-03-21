<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php require 'partials/header.php' ?>  

    <h1>Registrar</h1>
    <span>o <a href="index.php">Iniciar Sesión</a></span>
    <form action="index.php" method="post">
       <input type="text" name="email" placeholder="Ingresa tu Email">
       <input type="password" name="password" placeholder="Ingesa contraseña"> 
       <input type="password" name="confirm_password" placeholder="Confirma la contraseña"> 
       <input type="submit" value="Guardar Usuario">
    </form>

</body>
</html>