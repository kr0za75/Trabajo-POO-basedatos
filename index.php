<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css  /estilos.css"><!---Llamamos la carpeta de css donde están todos los estilos--->
  <link rel="icon" href="img/kokomicon.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/3bca6af8ff.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Pescao Corporation</title>
</head>
<?php include('login/mantenerlogeado.php');
include ('conexion.php');?>
<style>
a {
background-color: rgba(0,0,0,0);
transition: background-color .5s;
}

a:hover {
background-color: red;
}


</style>
<body id="body">
<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" id="logo">pescao corporation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" id="letranav">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?id=1" id="letranav">Formulario </a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" href="index.php?id=2" id="letranav">Mi juego </a>
        </li>
      </ul>
      <?php
          echo "<a href='login/cerrar.php' class='btn btn-outline-danger my-2 my-sm-0' id='letranav'>Cerrar Sesion</a>";
        ?>
    </div>
  </div>
  
</nav>

<br>
<div class="container"><BR><br>

<div class="card" id="opacidad">
<br><br><br>
                <div class="card-body" >
                <?php
            if (isset($_GET["id"])) { //isset = si existe la variable se va a conseguir la ID
              switch ($_GET["id"]) {
                case '1';
                $persona = $_SESSION["persona"];
                $conexion=mysqli_connect("localhost","root","","juegos");
                $select="SELECT COUNT(id_jugador) AS valida FROM jugador WHERE persona_id = '$persona'";
                $res=mysqli_query($conexion,$select);
                while ($row=$res->fetch_assoc()) {
                  $validaFormulario=$row['valida'];
                  if ($validaFormulario=='1') {
                    echo "<label class='text-center' id='realizado'>usuario ya registrado. gracias por su interes, sera contactado a la brevedad</label>";
                  }else{
                    include 'partes/formulario.php';
                  }
                }
                break;
                case '2';
                include 'partes/juegos.php';
                }
              }else {
               
                  include "partes/fotos.php";
                }
                
                    ?>
                  </div>
                </div>
                </div>
</body>
</html>
