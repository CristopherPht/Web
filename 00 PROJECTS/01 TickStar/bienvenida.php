<?php 
	session_start();

	$sesion = $_SESSION['email'];

	if ($sesion == null || $sesion == '') {
		echo "Inicia sesion para ver el contenido de esta pagina";
		die();
	}

 include "config.php";
 $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);

  $queryUser = "SELECT * FROM usuarios WHERE email = '$sesion'";
  $result = mysqli_query($conexion, $queryUser);

  while ($f = mysqli_fetch_array($result)) { 
?>


<!doctype html>
<html lang="en">
  <head>
  <title>TickStar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="animate.css">
    <title>Inicio</title>
    <link rel="stylesheet" href="Style.css">
    <style>
    .slider{
      background-color: #84B4D7;
      height: 100vh;
      background-size: cover;
      background-position: center;
    }
    h1{
        color: white
    }
    A:hover {text-decoration:none;color: #DEE9ED;}
    a{color: white;}
    </style>
  </head>
  <body>
  <section class="container-fluid slider d-flex justify-content-center align-items-center">
    <h1 class="display-4 animated bounceIn"> <p class="font-weight-bold"> Bienvenido a <a href="indexV2Logged.php">TickStar</a>, <?php echo $f['nombre']; } ?> . </p></h1>
  </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>