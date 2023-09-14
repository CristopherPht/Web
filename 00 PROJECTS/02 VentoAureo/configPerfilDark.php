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
    
    p{color: white;}
    A:hover {text-decoration:none;color:#52c2f0;}
    a{color: white;}
    td a{color: black;}
    body{background-color:#3D4247}
    </STYLE>
</head>
<body>
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
        <a class="nav-item nav-link" href="promocionesLogged.php">Promociones</a>
        <a class="nav-item nav-link" href="nosotrosDarkLogged.php">Nosotros</a>
        <a class="nav-item nav-link" href="contactoDarkLogged.php">Contacto</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEspectatulos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Tabla_conciertosDarkLogged.php">Conciertos</a>
              <a class="dropdown-item" href="Tabla_obrasDarkLogged.php">Obras de teatro</a>
            </div>
        </li>
      </div>
      <div class="d-flex flex-row justify-content-center">
      <div><img src="<?php echo $f['foto']; ?>" class="config rounded-circle" style="display: inline; margin-top: 5px;" width="30px;" height="30px;"></div>
        <div class="dropdown">
          <a class="btn #ffff dropdown-toggle mr-3" style="Background-color= #FF0000;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $f['nombre'];  ?></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="perfilDark.php">Perfil</a>
            <a href="CerrarSesionDark.php"><button type="button" class="btn btn-light mr-2">Cerrar Sesión</button></a>
          </div>
          <a href="configPerfil.php"><img src="imagenes/modes/sun-solid.svg" width="38px;" height="38px;"></a>
        </div>
      </div>
    </div>
  </nav>
</section>

<center>
<div class="container pt-4">
<div class="card-deck">
    <div class="card" style="background-color: #32363a; color: white">
        <form action="updateImageDark.php" method="post" enctype="multipart/form-data">
        <img src="<?php echo $f['foto'];?>" class=" mt-2 config rounded-circle img-thumbnail" height="200px" width="200px">
        <input type="file" name="foto" value"Subir una imagen" style="color:white">
        <input type="submit" name="done" value="Guardar imagen">
      </form>
      <div class="card-block text-center">
      <form action="Updates.php" method="post">
        <p>Nombre(s):   <input type="text" name="newname" placeholder=" <?php echo $f['nombre'];?>"> </p>
        <p>Apellidos: <input type="text" name="newape" placeholder=" <?php echo $f['apellidos'];?>"> </p>
        <p>Correo electronico: <input type="text" name="newmail" placeholder=" <?php echo $f['email'];?>"> </p>
        <p>Contraseña: <input type="password" name="newpass" placeholder="
        <?php 
            //ENCRIPTAR CONTRASEÑA
            $passOculta = md5($f['password']);
            echo $passOculta;
        ?>"> </p>
        <input type="submit" name="hecho" value="Guardar Cambios">
      </form>
    </div>
    <div>
    <center>
    <br>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmar">
        Eliminar mi cuenta
      </button>
    </center>
    </div>
      <div class="modal fade" id="confirmar" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tu cuenta sera completamente eliminada</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>¿Estas seguro?</p>
            </div>
            <div class="modal-footer">
              <a href="deleteAccount.php" class="btn btn-primary">Eliminar cuenta</a>
              <a class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
            </div>
    </div>
  </div>
</div>
</center>
</body>
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
</html>

<?php
    }
?>