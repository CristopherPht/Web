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

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>TickStar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" type="image/png" href="imagenes/Tickstar white.png"/>

    <title>TickStar</title>
    <STYLE>
      A:hover {text-decoration:none;color:#32363a;}
      a{color: white;}
      td a{color: black;}
      body{background-color: white;}
    </STYLE>
</head>
<body>
<!--Nav Bar-->
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
            <?php echo $f['nombre']; ?></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="perfil.php">Perfil</a>
            <a href="CerrarSesion.php"><button type="button" class="btn btn-light mr-2">Cerrar Sesión</button></a>
          </div>
          <a href="perfilDark.php"><img src="imagenes/modes/moon-solid.svg" width="38px;" height="38px;"></a>
        </div>
      </div>
    </div>
  </nav>
</section>
<div class="container pt-4">
<div class="card-deck">
    <div class="card">
        <div class="text-center">
            <img src="<?php echo $f['foto'];?>"height="200px" width="200px" class="config rounded-circle img-thumbnail" height=100px width=100px>
        </div>
        <div class="card-block text-center">
        <h5 class="card-title text-center">Perfil</h5>
        <p>Nombre(s):           <?php echo $f['nombre'];?>     </p>
        <p>Apellidos:           <?php echo $f['apellidos'];?>  </p>
        <p>Correo electronico:  <?php echo $f['email'];?>     </p>
        <p>Contraseña: 
        <?php 
            //ENCRIPTAR CONTRASEÑA
            $passOculta = md5($f['password']);
            echo $passOculta;
        ?> </p>
        </div>
        <center><a href="configPerfil.php"><input type="submit"name="hecho" value="Editar Perfil"></a></center>

    </div>
  </div>
</div>
      <!--FOOTER-->
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
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</html>

<?php
    }
?>
