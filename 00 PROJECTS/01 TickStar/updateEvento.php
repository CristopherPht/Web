<?php
    include("config.php");
    //CONECTAR CON LA BASE DE DATOS
    $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);
    session_start();
    $sesion = $_SESSION['email'];

    $id            = $_GET['id'];
    $newDesc       = $_POST['newdesc'];
    $newFecha      = $_POST['newfecha'];
    $newLugar      = $_POST['newlugar'];
    $newHora       = $_POST['newhora'];
    $newEstatus    = $_POST['newestatus'];

    if ($newDesc != '' || $newDesc != null) {
        $update = "UPDATE eventos SET descripcion = '$newDesc' WHERE id = '$id';";
        $query = mysqli_query($conexion, $update);
    }

    if ($newFecha != '' || $newFecha != null) {
        $update = "UPDATE eventos SET fecha = '$newFecha' WHERE id = '$id';";
        $query = mysqli_query($conexion, $update);
    }

    if ($newLugar != '' || $newLugar != null) {
        $update = "UPDATE eventos SET lugar = '$newLugar' WHERE id = '$id';";
        $query = mysqli_query($conexion, $update);
    }

    if ($newHora != '' || $newHora != null) {
        $update = "UPDATE eventos SET hora = '$newHora' WHERE id = '$id';";
        $query = mysqli_query($conexion, $update);
    }
    if ($newEstatus != '' || $newEstatus != null) {
        $update = "UPDATE eventos SET estatus = '$newEstatus' WHERE id = '$id';";
        $query = mysqli_query($conexion, $update);
    }
    header("location: indexAdmin.php");
?>