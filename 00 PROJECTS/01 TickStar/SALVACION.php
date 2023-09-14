<?php 
    include "config.php";
    $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);

    for ($i=1; $i < 17 ; $i++) { 
        $asiento = "A".$i;
        $foto    = "imagenes/asientos/A".$i.".png";
        $query = "INSERT INTO asientos (nombre, tipo, precio, foto) VALUES ('$asiento', 'VIP', '5', '$foto');";
        $result = mysqli_query($conexion, $query);
        if ($result) {
           echo "ASIENTO ".$asiento." INGRESADO CORRECTAMENTE"; ?> <br> <?php
        }
        else {
            echo "error";
        }
    } ?>


<?php
    for ($i=1; $i < 17 ; $i++) { 
        $asiento = "B".$i;
        $foto    = "imagenes/asientos/B".$i.".png";
        $query = "INSERT INTO asientos (nombre, tipo, precio, foto) VALUES ('$asiento', 'Regular', '1', '$foto');";
        $result = mysqli_query($conexion, $query);
        if ($result) {
           echo "ASIENTO ".$asiento." INGRESADO CORRECTAMENTE"; ?> <br> <?php
        }
        else {
            echo "error";
        }
    }
?>

<?php
    for ($i=1; $i < 17 ; $i++) { 
        $asiento = "C".$i;
        $foto    = "imagenes/asientos/C".$i.".png";
        $query = "INSERT INTO asientos (nombre, tipo, precio, foto) VALUES ('$asiento', 'Regular', '1', '$foto');";
        $result = mysqli_query($conexion, $query);
        if ($result) {
           echo "ASIENTO ".$asiento." INGRESADO CORRECTAMENTE"; ?> <br> <?php
        }
        else {
            echo "error";
        }
    }
?>

<?php
    for ($i=1; $i < 17 ; $i++) { 
        $asiento = "D".$i;
        $foto    = "imagenes/asientos/D".$i.".png";
        $query = "INSERT INTO asientos (nombre, tipo, precio, foto) VALUES ('$asiento', 'Regular', '1', '$foto');";
        $result = mysqli_query($conexion, $query);
        if ($result) {
           echo "ASIENTO ".$asiento." INGRESADO CORRECTAMENTE"; ?> <br> <?php
        }
        else {
            echo "error";
        }
    }
?>

<?php
    for ($i=1; $i < 17 ; $i++) { 
        $asiento = "E".$i;
        $foto    = "imagenes/asientos/E".$i.".png";
        $query = "INSERT INTO asientos (nombre, tipo, precio, foto) VALUES ('$asiento', 'Regular', '1', '$foto');";
        $result = mysqli_query($conexion, $query);
        if ($result) {
           echo "ASIENTO ".$asiento." INGRESADO CORRECTAMENTE"; ?> <br> <?php
        }
        else {
            echo "error";
        }
    }
?>

<?php
    for ($i=1; $i < 17 ; $i++) { 
        $asiento = "F".$i;
        $foto    = "imagenes/asientos/F".$i.".png";
        $query = "INSERT INTO asientos (nombre, tipo, precio, foto) VALUES ('$asiento', 'Regular', '1', '$foto');";
        $result = mysqli_query($conexion, $query);
        if ($result) {
           echo "ASIENTO ".$asiento." INGRESADO CORRECTAMENTE"; ?> <br> <?php
        }
        else {
            echo "error";
        }
    }
?>

<?php
    for ($i=1; $i < 17 ; $i++) { 
        $asiento = "G".$i;
        $foto    = "imagenes/asientos/G".$i.".png";
        $query = "INSERT INTO asientos (nombre, tipo, precio, foto) VALUES ('$asiento', 'Regular', '1', '$foto');";
        $result = mysqli_query($conexion, $query);
        if ($result) {
           echo "ASIENTO ".$asiento." INGRESADO CORRECTAMENTE"; ?> <br> <?php
        }
        else {
            echo "error";
        }
    }
?>
