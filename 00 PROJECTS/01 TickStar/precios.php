
<?php 
  session_start();
  error_reporting(0);
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
    <link rel="icon" type="image/png" href="imagenes/Tickstar white.png"/>

    <link rel="stylesheet" href="css/bootstrap.css">
    <!--Style-->
    <STYLE>
        A:hover {text-decoration:none;color:#32363a;}
        a{color: white;}
        td a{color: black;}
        body{background-color: white}
      </STYLE>
    <!--Prices-->
    <title>TickStar</title>
  </head>
<body>
    <!--NAV BAR-->
  <section id="nav bar">
    <nav class="navbar  navbar-expand-md navbar/-dark navbar sticky-top" style="background-color: #2E9AFE">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mr-2" href="indexV2Logged.php">
        <img src="imagenes/Tickstar white.png" width="100" height="50" class="d-inline-block align-top" alt="Logo TickStar">
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <div class="navbar-nav mr-auto ml-auto text-center">
        <a class="nav-item nav-link active" href="indexV2Logged.php">Inicio <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="promocionesLogged.php">Promociones</a>
        <a class="nav-item nav-link" href="nosotrosLogged.php">Nosotros</a>
        <a class="nav-item nav-link" href="contactoLogged.php">Contacto</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEspectatulos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Tabla_conciertosLogged.php">Conciertos</a>
            </div>
        </li>
      </div>
      <div class="d-flex flex-row justify-content-center">
      <div><img src="<?php echo $f['foto']; ?>" class="config rounded-circle" style="display: inline; margin-top: 5px;" width="30px;" height="30px;"></div>
        <div class="dropdown">
          <a class="btn #ffff dropdown-toggle mr-3" style="Background-color= #FF0000;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $f['nombre']; } ?></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="perfil.php">Perfil</a>
            <a href="CerrarSesion.php"><button type="button" class="btn btn-light mr-2">Cerrar Sesión</button></a>
          </div>
          <a href="preciosDark.php"><img src="imagenes/modes/moon-solid.svg" class="mr-2 mt-1" width="30px;" height="30px;"></a>
        </div>
      </div>
    </div>
  </nav>
</section>
  <!--PRICE 1-->
<div class="container text-center">
    <h1 class="display-4 pt-5">Elige tú mejor opción<i class="fa fa-thumbs-o-up"></i></h1>

    <div class="card-deck pt-5">
    <?php 
      include "config.php";
      $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);

      $queryProd = "SELECT * FROM boletos WHERE id = 1";
      $result = mysqli_query($conexion, $queryProd);
      while ($f = mysqli_fetch_array($result)) {
    ?>
        <div class="card">
          <img class="card-img-top" src="./imagenes/tickets/<?php echo $f['imagen'];?>">
          <div class="card-body">
            <h5 class="card-title"> <?php  echo $f['nombre']; ?></h5>
            <p class="card-text">El precio que pagarías por ver a tus estrellas favoritas.</p>
            <a href="detalles.php?id=<?php echo $f['id'];?>" class="btn btn-primary">¡Vamos!</a>
          </div>
        </div>
    <?php
      }
    ?>
    <?php

      $queryProd = "SELECT * FROM boletos WHERE id = 2";
      $result = mysqli_query($conexion, $queryProd);
      while ($f = mysqli_fetch_array($result)) {
    ?>
        <div class="card">
          <img class="card-img-top" src="./imagenes/tickets/<?php echo $f['imagen'];?>">
          <div class="card-body">
            <h5 class="card-title"> <?php  echo $f['nombre']; ?></h5>
            <p class="card-text">El precio que pagarías por UNA EXPERIENCIA INOLVIDABLE</p>
            <a href="detalles.php?id=<?php echo $f['id'];?>" class="btn btn-primary">¡Vamos!</a>
          </div>
        </div>
    <?php
      }
    ?>
  </div>
   <br>
    <a href="mapaConcierto.php" class="btn btn-primary">Ver mapa del escenario</a>


</div>
      <!--FOOTER-->
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <section>
        <center>
        <footer class="footer">
        <div class="container">
          <span class="text-muted"><img src="imagenes/footer/Copyright.svg" width="20px"heigth="20px;"> Copyright All rights reserved</span>
        </div>
        <div class="footer">
          <span class="text-muted mr-2"><img src="imagenes/icons/Facebook.svg" width="20px"heigth="20px;">Tick Star</span>
          <span class="text-muted mr-2"><img src="imagenes/icons/Instagram.svg" width="20px"heigth="20px;">Tickstar2018</span>
          <span class="text-muted mr-2"><img src="imagenes/icons/Twitter.svg" width="20px"heigth="20px;">@TickStar2018</span>
        </div>
      </footer>
        </center>
      </section>
      <!--END OF FOOTER-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>