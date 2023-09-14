<?php 
	session_start();
	//CONEXION A LA BASE DE DATOS
	include("config.php");
	$conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);
	//OBTENCION DE VARIABLES DEL LOGIN
	$usuario			= $_POST['email'];
	$password			= $_POST['password'];
	$_SESSION['email'] 	= $usuario;

	//CONSULTA PARA VALIDAR LOS DATOS INGRESADOS
	$consulta = "SELECT * FROM usuarios WHERE email = '$usuario' AND password = '$password'";
	$resultado = mysqli_query($conexion, $consulta);

	$filas = mysqli_num_rows($resultado);
	if ($filas > 0) {
		header("location: BienvenidaDark.php);
	}
	else{
		echo "Error en la autentificacion";
	}

	$_SESSION['email'] = $usuario;



 ?>