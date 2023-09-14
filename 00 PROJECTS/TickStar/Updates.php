<?php
    include("config.php");
    //CONECTAR CON LA BASE DE DATOS
    $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);

    session_start();

    $sesion = $_SESSION['email'];

    $newName     = $_POST['newname'];
    $newApe      = $_POST['newape'];
    $newMail     = $_POST['newmail'];
    $newPass     = $_POST['newpass'];


    if ($newName != '' || $newName != null) {
        $update = "UPDATE usuarios SET nombre = '$newName' WHERE email = '$sesion';";
        $query = mysqli_query($conexion, $update);
    }

    if ($newApe != '' || $newApe != null) {
        $update = "UPDATE usuarios SET apellidos = '$newApe' WHERE email = '$sesion';";
        $query = mysqli_query($conexion, $update);
    }
    
    if ($newMail != '' || $newMail != null) {
        $update = "UPDATE usuarios SET email = '$newMail' WHERE email = '$sesion';";
        $query = mysqli_query($conexion, $update);
    }

    if ($newPass != '' || $newPass != null) {
        $update = "UPDATE usuarios SET password = '$newPass' WHERE email = '$sesion';";
        $query = mysqli_query($conexion, $update);
    }
    
    header("location: perfil.php");
?>