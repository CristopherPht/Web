<?php
    include("config.php");
    //CONECTAR CON LA BASE DE DATOS
    $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);
    session_start();
    $sesion = $_SESSION['email'];


    $delete = "DELETE FROM usuarios WHERE email = '$sesion';";
    $query = mysqli_query($conexion, $delete);

    header("location:CerrarSesion.php");
?>