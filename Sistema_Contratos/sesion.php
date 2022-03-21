<?php 
require 'conection.php';
session_start();
$usuario=$_POST['email'];
$clave=$_POST['password'];

$query="SELECT * FROM usuarios WHERE email='$usuario' AND pwd='$clave'";
$consulta=pg_querty($conexion,$query);
$cantidad=pg_num_rows($consulta);
    if($cantidad>0){
        $_SESSION['nombre_usuario']=$usuario;
        header("location: ingreso.php");
    }
    else{
        echo "Datos incorrectos";
    }
?>
