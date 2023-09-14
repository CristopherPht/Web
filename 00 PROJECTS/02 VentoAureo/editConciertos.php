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
    <link rel="stylesheet" href="font.css">
    <title>TickStar</title>
    <STYLE>
      A:hover {text-decoration:none;color:#32363a;}
      a{color: white;}
      td a{color: black;}
      body{background-color: white;}
    </STYLE>
</head>
<body>
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
        <a class="nav-item nav-link active" href="indexV2Logged.php"> <span class="sr-only">(current)</span></a>
      </div>
      <div class="d-flex flex-row justify-content-center">
      <div><img src="<?php echo $f['foto']; ?>" class="config rounded-circle" style="display: inline; margin-top: 5px;" width="30px;" height="30px;"></div>
        <div class="dropdown">
          <a class="btn #ffff dropdown-toggle mr-3" style="Background-color= #FF0000;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $f['nombre']; } ?></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a href="CerrarSesion.php"><button type="button" class="btn btn-light mr-2">Cerrar Sesión</button></a>
          </div>
          <a href="indexAdminDark.php"><img src="imagenes/modes/moon-solid.svg" width="38px;" height="38px;"></a>
        </div>
      </div>
    </div>
  </nav>
</section>
<center>
    <?php 
        $id= $_GET['id'];
        
        $queryEvent = "SELECT * FROM eventos WHERE id = '$id';";
        $result2 = mysqli_query($conexion, $queryEvent);
  
        while ($f2= mysqli_fetch_array($result2)){ 
    ?>
    <div class="container pt-4">    
        <div class="card-deck">
            <div class="card">
                <div class="card-block text-center">
                    <form action="updateImageEvento.php?id=<?php echo $f2['id'];?>">
                        <p>Imagen: <input type="file" name="foto" value="Subir"></p>
                        <input type="submit" name="hecho" value="Guardar imagen"> <br>
                    </form>
                    <form action="updateEvento.php?id=<?php echo $f2['id'];?>" method="post">
                        <br>
                        <p>Descripcion: <input type="text" name="newdesc" placeholder="<?php echo $f2['descripcion'];  ?>"></p>
                        <p>Fecha: <input type="text" name="newfecha" placeholder="<?php echo $f2['fecha'];        ?>"></p>
                        <p>Lugar: <input type="text" name="newlugar" placeholder="<?php echo $f2['lugar'];        ?>"></p>
                        <p>Horario: <input type="text" name="newhora" placeholder="<?php echo $f2['hora'];         ?>"></p>
                        <p>Estatus: <input type="text" name="newestatus" placeholder="<?php echo $f2['estatus'];         ?>"></p>
                        <input type="submit" name="hecho" value="Guardar Cambios">
                    </form>
                </div>
                <?php } ?>
                
            </div>
        </div>
    </div>
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
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</html>
