
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>TickStar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Links-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="icon" type="image/png" href="imagenes/Tickstar white.png"/>
    <STYLE type="text/css">
     .shadow-sm p-3 mb-5 bg-white rounded {color: #09a8cc;}
    A:hover {text-decoration:none;color:#32363a;}
    td a:hover{color: #09a8cc;}
    a{color: white;}
    td a{color: black;}
    </STYLE>
  </head>
  <body>
    <!--NAV BAR-->
 <section id="nav bar">
    <nav class="navbar  navbar-expand-md navbar/-dark navbar sticky-top" style="background-color: #2E9AFE">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mr-2" href="indexV2.php">
        <img src="imagenes/Tickstar white.png" width="100" height="50" class="d-inline-block align-top" alt="Logo TickStar">
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <div class="navbar-nav mr-auto ml-auto text-center">
        <a class="nav-item nav-link active" href="indexV2.php">Inicio <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="promociones.php">Promociones</a>
        <a class="nav-item nav-link" href="nosotros.php">Nosotros</a>
        <a class="nav-item nav-link" href="contacto.php">Contacto</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEspectatulos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Tabla_conciertos.php">Conciertos</a>
            </div>
        </li>
      </div>
      <div class="d-flex flex-row justify-content-center">
        <a href="login.php"><button type="button" class="btn btn-light mr-2">Iniciar Sesión</button></a>
        <a href="register.php"><button type="button" class="btn btn-light mr-2">Registrarse</button></a>
        <a href="Tabla_conciertosDark.php"><img src="imagenes/modes/moon-solid.svg" width="38px;" height="38px;"></a>
      </div>
    </div>
  </nav>
</section>
<div class="container">
    <div class="shadow-sm p-3 bg-white rounded text-uppercase" align="center">Eventos próximos</div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col"><p align="center"></p></th>
          <th scope="col"><p align="center">Descripción</p></th>
          <th scope="col"><p align="center">Fecha</p></th>
          <th scope="col"><p align="center">Lugar</p></th>
          <th scope="col"><p align="center">Horario</p></th>
        </tr>
      </thead>
      <tbody>
      <?php 
        include("config.php");
        $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_base);

        $queryUser = "SELECT * FROM eventos";
        $result = mysqli_query($conexion, $queryUser);
  
        while ($f = mysqli_fetch_array($result)) { 
          $estatus = $f['estatus'];
          if ($estatus == "alta") {
            
      ?>
        <tr>
          <th scope="row"><center><img src="imagenes/eventos/<?php echo $f['imagen'];?>" width="80px" heigth="100px"></center> </th>
          <td><a href="precios.php"><center class="mt-1"><p> <?php echo $f['descripcion']; ?></center></a></td>
          <td><a href="precios.php"><center class="mt-1"><p> <?php echo $f['fecha']; ?></center> </a></td>
          <td><a href="precios.php"><center class="mt-1"><p> <?php echo $f['lugar']; ?></center> </a></td>
          <td><a href="precios.php"><center class="mt-1"><p> <?php echo $f['hora']; ?></center> </a></td>
        </tr>
        <?php } }?>
      </tbody>
    </table>
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
      <!--END OF FOOTER-->
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>