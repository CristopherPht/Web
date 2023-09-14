<?php 
	include("config.php");
	//CONECTAR CON LA BASE DE DATOS
	$conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);
	//ASIGNAR VALORES DEL FORMULARIO A VARIABLES
	$nombre 	= $_POST['nombre'];
	$apellidos	= $_POST['apellidos'];
	$email		= $_POST['email'];
	$password	= $_POST['password'];
	$password2	= $_POST['confirmPass'];

	if ($password == $password2) {
		if ($conexion) {
			$dataBase = mysqli_select_db($conexion,$bd_base);
			if ($dataBase) {
				$query = "INSERT INTO usuarios(nombre,apellidos,email,password) VALUES('$nombre','$apellidos','$email','$password');";
				mysqli_query($conexion,$query);
				header("location: indexDark.php");
			}
		}
	} 
	else{
		echo "Las contraseñas no coinciden";
	}
 ?>
