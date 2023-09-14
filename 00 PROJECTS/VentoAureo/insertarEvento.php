<?php
    include("config.php");
    //CONECTAR CON LA BASE DE DATOS
    $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);
    session_start();
    $sesion = $_SESSION['email'];

    $desc       = $_POST['desc'];
    $fecha      = $_POST['fecha'];
    $lugar      = $_POST['lugar'];
	$hora       = $_POST['hora'];
	$estatus 	= $_POST['estatus'];

    $add = "INSERT INTO eventos(descripcion, fecha, lugar, hora, estatus) VALUES ('$desc', '$fecha', '$lugar', '$hora', '$estatus');";
	mysqli_query($conexion, $add);
    header("location: indexAdmin.php");
?>