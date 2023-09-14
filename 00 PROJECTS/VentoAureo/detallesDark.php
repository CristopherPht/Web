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

<!DOCTYPE html>
<html>
<head>
<title>TickStar</title>
    <meta charset="utf-8" />
    <title>TickStar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="imagenes/Tickstar white.png"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>TickStar</title>
    <STYLE>
       A:hover {text-decoration:none;color:#52c2f0;}
      a{color: white;}
      td a{color: black;}
      .logo{position: relative; margin: auto; padding-right: 23%}
      h1{color: white}
      h2{color: white} 
      h3{color: white}
      h5{color: white} 

      body{background-color:#3D4247}
      td a{
        color: white;
      }
    </STYLE>
</head>
<body>
<section id="nav bar">
    <nav class="navbar  navbar-expand-md navbar/-dark navbar sticky-top" style="background-color: #32363a">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mr-2" href="indexV2Logged.php">
        <img src="imagenes/Tickstar white.png" width="100" height="50" class="d-inline-block align-top" alt="Logo TickStar">
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <div class="navbar-nav mr-auto ml-auto text-center">
        <a class="nav-item nav-link active" href="indexV2Logged.php">Inicio <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="promocionesDarkLogged.php">Promociones</a>
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
            <?php echo $f['nombre'];  ?></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="perfil.php">Perfil</a>
            <a href="CerrarSesionDark.php"><button type="button" class="btn btn-light mr-2">Cerrar Sesión</button></a>
          </div>
          <a href="detallesDark.php"><img src="imagenes/modes/moon-solid.svg" width="38px;" height="38px;"></a>
        </div>
      </div>
    </div>
  </nav>
</section>
<center>
  <div class="container text-center">
    <h1 class="display-4 pt-5">Detalles<i class="fa fa-thumbs-o-up"></i></h1>
     <div class="card-deck pt-5">
      <?php 
        include "config.php";
        $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);

        $id = $_GET['id'];

        $queryProd = "SELECT * FROM boletos WHERE id ='$id';";
        $result = mysqli_query($conexion, $queryProd);
        while ($f = mysqli_fetch_array($result)) {
      ?>
      <div class="card">
        <img class="card-img-top" src="./imagenes/tickets/<?php echo $f['imagen'];?>" width="400px" height="500px">
        <div class="card-body" style="background: #3D4247">
          <h5 class="card-title"> <?php  echo $f['nombre']; ?></h5>
          <h3 class="card-text"> $ <?php echo $f['precio']; ?></h3>

            <?php 
              if ($id == 1) {
            ?>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="5WTZS95SJ67NC">
            <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
            </form>
            <?php
              } 
              else{
            ?>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="TR69RSPQJ3E82">
            <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
            </form>

            <?php
              }
            ?>
        </div>
      </div>
      <?php } ?>
    </div>
</center>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>

<?php } ?>
</html>