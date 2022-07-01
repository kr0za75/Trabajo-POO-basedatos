<?php include_once('login/mantenerlogeado.php');
include_once('clases/conexion.php'); ?>
<div class="text-center">
    
<?php
  $persona = $_SESSION['persona'];
 $con = new Conexion('localhost','root','','juegos');
 $a=$con->conectar();
  $sql = "SELECT * FROM jugador where persona_id = '$persona'";
  $res=mysqli_query($a,$sql);
    while ($row=$res->fetch_assoc()){
        $idjuego = $row['juego_id'];
    }
    $sql = "SELECT * FROM juego where id = '$idjuego'";
    $res=mysqli_query($a,$sql);
    while ($row=$res->fetch_assoc()){
        $nombrejuego = $row['juego_resultado'];
    }

        echo "<label id='bienvenido'>$nombrejuego</label>";
       ?>
      </div>