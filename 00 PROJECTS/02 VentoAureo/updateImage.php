<?php
    include("config.php");
    //CONECTAR CON LA BASE DE DATOS
    $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);
    session_start();
    $sesion = $_SESSION['email'];

    $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);

    $queryUser = "SELECT * FROM usuarios WHERE email = '$sesion'";
    $result = mysqli_query($conexion, $queryUser);

    while ($f = mysqli_fetch_array($result)) { 
        $id          = $f['id'];
        $tipo        = 'jpg';
        $fotoName    = $_FILES['foto']['name'];
        $ruta        = $_FILES['foto']['tmp_name'];
        $Newfotoname = $id.'.'.$tipo;
        $destino = "imagenes/".$Newfotoname;
        if (is_uploaded_file($ruta)) {
            move_uploaded_file($ruta, $destino);
        }
        $update = "UPDATE usuarios SET foto = '".$destino."' WHERE email = '$sesion';";
        $query = mysqli_query($conexion, $update);
        header("location: perfil.php");
    }
?>