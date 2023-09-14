
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
    <link rel="icon" type="image/png" href="imagenes/Tickstar white.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="IndexStyle.css">
    <title>TickStar</title>
    <STYLE>
       A:hover {text-decoration:none;color:#52c2f0;}
      a{color: white;}
      td a{color: black;}
      .logo{position: relative; margin: auto; padding-right: 23%}
      body{background-color:#3D4247}
      td a{
        color: white;
      }
    </STYLE>
  </head>
  <body>

    <!--NAV BAR-->
  <section id="nav bar">
    <nav class="navbar  navbar-expand-md navbar/-dark navbar sticky-top" style="background-color: #32363a">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mr-2" href="indexDarkLogged.php">
        <img src="imagenes/Tickstar white.png" width="100" height="50" class="d-inline-block align-top" alt="Logo TickStar">
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <div class="navbar-nav mr-auto ml-auto text-center">
        <a class="nav-item nav-link active" href="indexDarkLogged.php">Inicio <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="promocionesDarkLogged.php">Promociones</a>
        <a class="nav-item nav-link" href="nosotrosDarkLogged.php">Nosotros</a>
        <a class="nav-item nav-link" href="contactoDarkLogged.php">Contacto</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEspectatulos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Tabla_conciertosDarkLogged.php">Conciertos</a>
            </div>
        </li>
      </div>
      <div class="d-flex flex-row justify-content-center">
      <div><img src="<?php echo $f['foto']; ?>" class="config rounded-circle" style="display: inline; margin-top: 5px;" width="30px;" height="30px;"></div>
        <div class="dropdown">
          <a class="btn #ffff dropdown-toggle mr-3" style="Background-color= #FF0000;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $f['nombre']; } ?></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="perfilDark.php">Perfil</a>
            <a href="CerrarSesionDark.php"><button type="button" class="btn btn-light mr-2">Cerrar Sesión</button></a>
          </div>
          <a href="indexV2Logged.php"><img src="imagenes/modes/sun-solid.svg" class="mr-2 mt-1" width="30px;" height="30px;"></a>
        </div>
      </div>
    </div>
  </nav>
</section>
     <!-- Slider-->
    <section id="Slider">
        <center>
        <div class="col-md-7 container">
                <div id="Slide2" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="imagenes/slider/Orquesta.jpg" alt="First slide">
                    </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="imagenes/slider/AW.jpg" alt="Second slide">
                      </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="imagenes/slider/Juventud.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="imagenes/slider/Tercer Cielo.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="imagenes/slider/Sunsets.jpg" alt="Fifth slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#Slide2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#Slide2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <img class="publicidad7 ml-3 float-left"src="imagenes/publicidad/LOGITECH.jpg">
          </div>
          <div>
            <img class="publicidad8 mr-3 float-right"src="imagenes/publicidad/TURKISH.gif">
          </div>
    </section>
    <br>
    <!--TEXT ABOUT EVENTS-->
    <div class="shadow-sm p-1 mb-3 rounded text-uppercase" align="center"style="background-color: #3D4247; color: white;">Eventos próximos</div>
    <!--CARDS-->
    <section class="container">
      <div class="card-deck">
          <div class="card">
            <img class="card-img-top img-fluid" src="imagenes/cards/Bruno.png" alt="Card image cap">
            <div class="card-body"style="background-color: #32363a;">
            <center><a href="precios.php"><button  type="button" class="btn btn-info mt-1">Vamos</button></a></center>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="imagenes/cards/David.png" alt="Card image cap">
            <div class="card-body"style="background-color: #32363a;">
            <center><a href="precios.php"><button  type="button" class="btn btn-info mt-1">Vamos</button></a></center>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="imagenes/cards/Maluma.png" alt="Card image cap">
            <div class="card-body"style="background-color: #32363a;">
            <center><a href="precios.php"><button  type="button" class="btn btn-info mt-1">Vamos</button></a></center>
            </div>
          </div>
        </div>
      </section>
    </section>
    </center>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>