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
    <link rel="icon" type="image/png" href="imagenes/Tickstar white.png"/>
    <style>
    .slider{
      background-color: #52c2f0;
      background-image: url("imagenes/Tickstar white.png");
      height: 55vh;
      background-size: 45%;
      background-repeat:no-repeat;
      background-position: bottom;
    }
    body{
      background-color: #3D4247;
    }
    A:hover {text-decoration:none;color:#52c2f0;}
    a{color: white;}
    p{color: white;}
    </style>
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
            <a class="dropdown-item" href="perfil.php">Perfil</a>
            <a href="CerrarSesionDark.php"><button type="button" class="btn btn-light mr-2">Cerrar Sesión</button></a>
          </div>
          <a href="nosotrosLogged.php"><img src="imagenes/modes/sun-solid.svg" class="mr-2 mt-1" width="30px;" height="30px;"></a>
        </div>
      </div>
    </div>
  </nav>
</section>
  <section class="container-fluid slider d-flex justify-content-center align-items-center">
    <h1 class="display-4"></h1>
  </section>
  <section class="container">
    <p class="mt-3 pt-3 text-center text-uppercase font-weight-bold font-italic">Boletos al alcance de tus manos</p>
    <ul><p class="text-center text-text-justify">TickStar es la marca que promueve la empresa comercializadora de tickets para eventos.
      <p  style="background-color: #10B7FA" class="text-white p-4 w-25 float-left mr-4 text-justify">Tick – Viene de la palabra “Ticket” en inglés, que es el principal producto/servicio que la empresa ofrece.
      <br><br>Star – Significa “Estrella” en inglés, lo cual hace referencia a la frase “Apunta a las estrellas, y llegarás a la luna”. Esto da a entender que la empresa no se quiere quedar atrás, quiere seguir innovando y ofreciendo lo mejor a sus clientes, siempre buscando una manera en que ambas partes resulten beneficiadas.</li>
      </p>
    </ul>
    <p class="text-justify p-"><p class="font-weight-bold">Misión</p><p>Ofrecemos la calidad y servicios necesarios para que el cliente o compradores potenciales, puedan hacer uso de nuestro sitio web. De esta forma, se logra
    interactuar de forma cómoda a cualquier hora y en cualquier lugar.</p>
    <p class="text-justify p-"><p class="font-weight-bold">Visión</p><p>Ser la primera opción, por encima de nuestra competencia, en cuanto a venta de tickets se refiere, ofreciendo el servicio óptimo para que no existan dificultades 
    durante el proceso de compra y navegación dentro del sitio web.</p>
  </section>
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