<!DOCTYPE html>
<html>
<head>
<title>TickStar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="LoginCss.css">
</head>
<body>
		<form method="POST" action="">
			<h2>Crear una cuenta en TickStar</h2>
			<input type="text" name="nombre" placeholder="Nombre" required>
			<input type="text" name="apellidos" placeholder="Apellidos">
			<input type="text" name="email" placeholder="Correo electronico" required>
			<input type="password" name="password" placeholder="Contraseña" required>
			<input type="password" name="confirmPass" placeholder="Confirmar contraseña" required>
			<input type="submit" name="enviar" value="Registrarse">
			<a href="login.php" style="text-decoration: none;"><input type="submit" name="enviar" value="¿Ya tienes cuenta? Inicia sesión"></a>
		</form>
		<?php 
			if (isset($_POST['enviar'])) {
				require("insertar_usuario.php");
			}
		?>
	</center>
</body>
</html>