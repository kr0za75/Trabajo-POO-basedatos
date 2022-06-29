<?php
include_once('conexion.php');
include_once('persona.php');
include_once('jugador.php');
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST" AND ISSET($_POST['enviar'])){ //Si se presiona el botón registar del modal añadir, se mandarán las variables y se registrarán acá
  echo "Guardar";
  $id_jugador=0;

  $_SESSION['formulario']='SI';
  $persona_id=$_SESSION['persona'];
  $externos_id=$_POST['conocimientos'];
  $preferencia_id=$_POST['pref'];
  $pericia_id=$_POST['pericia'];
  $dedicacion_id=$_POST['tiempodedicado'];
  $historial_id=$_POST['historialpersonal'];
  $tipo_jugador_id=$_POST['radio'];
  $categoria_id=$_POST['categoria'];
  $conexion  = new Conexion('localhost:3306', 'root', '','juegos');
  $sql = "SELECT * FROM externos where id = '$externos_id'";
  $res = $conexion->conectar()->query($sql);
    while ($row=$res->fetch_assoc()){
    $suma_externos = $row['valor_externos'];
  }
  $sql = "SELECT * FROM preferencia where id = '$preferencia_id'";
  $res = $conexion->conectar()->query($sql);
    while ($row=$res->fetch_assoc()){
    $suma_preferencia = $row['valor_preferencia'];
  }
  $sql = "SELECT * FROM pericia where id = '$pericia_id'";
  $res = $conexion->conectar()->query($sql);
    while ($row=$res->fetch_assoc()){
    $suma_pericia = $row['valor_pericia'];
  }
  $sql = "SELECT * FROM dedicacion where id = '$dedicacion_id'";
  $res = $conexion->conectar()->query($sql);
    while ($row=$res->fetch_assoc()){
    $suma_dedicacion = $row['valor_dedicacion'];
  }
  $sql = "SELECT * FROM historial where id = '$historial_id'";
  $res = $conexion->conectar()->query($sql);
    while ($row=$res->fetch_assoc()){
    $suma_historial = $row['valor_historial'];
  }
  $sql = "SELECT * FROM tipo_jugador where id = '$tipo_jugador_id'";
  $res = $conexion->conectar()->query($sql);
    while ($row=$res->fetch_assoc()){
    $suma_tipo_jugador = $row['valor_tipo'];
  }
  $sql = "SELECT * FROM categoria where id = '$categoria_id'";
  $res = $conexion->conectar()->query($sql);
    while ($row=$res->fetch_assoc()){
    $suma_categoria = $row['valor_categoria'];
  }
  $suma_total = $suma_externos + $suma_preferencia + $suma_pericia + $suma_dedicacion + $suma_historial + $suma_tipo_jugador + $suma_categoria;
  $sql = "SELECT * FROM juego where valor_juego = '$suma_total'";
  $res = $conexion->conectar()->query($sql);
    while ($row=$res->fetch_assoc()){
    $juego_id = $row['id'];
  }

  $jugador = new jugador($id_jugador,$persona_id,$externos_id,$preferencia_id,$pericia_id,$juego_id,$dedicacion_id,$historial_id,$tipo_jugador_id,$categoria_id);
  $jugador->insertarJugador();
}

elseif($_SERVER['REQUEST_METHOD'] == "POST" AND ISSET($_POST['register'])){
$id=0;
header("Location:../register.php");
$correo=$_POST['correo'];
$nombre=$_POST['nombre'];
$clave=$_POST['clave'];
$apellido=$_POST['apellido'];
$rut=$_POST['rut'];
$telefono=$_POST['telefono'];
$conexion  = new Conexion('localhost:3306', 'root', '','juegos');
$persona = new persona($id,$correo,$nombre,$clave,$apellido,$rut,$telefono,'4');
$persona->insertarPersona();


}
