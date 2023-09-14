<?php
    include("config.php");
    //CONECTAR CON LA BASE DE DATOS
    $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);
    session_start();

    $sesion = $_SESSION['email'];

    $id = $_GET['id'];

    $query = "SELECT * FROM eventos WHERE id = '$id'";
    $result = mysqli_query($conexion, $query);

    while ($f = mysqli_fetch_array($result)) { 
        $id          = $f['id'];
        $tipo        = 'jpg';
        $fotoName    = $_FILES['foto']['name'];
        $ruta        = $_FILES['foto']['tmp_name'];
        $Newfotoname = $id.'.'.$tipo;
        $destino = "imagenes/eventos/".$Newfotoname;
        if (is_uploaded_file($ruta)) {
            move_uploaded_file($ruta, $destino);
        }
        $update = "UPDATE eventos SET imagen = '".$destino."' WHERE id = '$id';";
        mysqli_query($conexion, $update);
        header("location: indexAdmin.php");
    }
?>