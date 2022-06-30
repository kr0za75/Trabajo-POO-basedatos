<?php
include_once('conexion.php');
$rut=$_POST['rutlog'];
$clave=$_POST['clavelog'];
$con = new Conexion('localhost','root','','juegos');
$a=$con->conectar();
$select="SELECT * FROM persona WHERE rut = '$rut' AND clave = '$clave'";
$res=mysqli_query($a,$select);
while ($row=$res->fetch_assoc()){
  $id_persona=$row['id'];
  $nombre=$row['nombre'];
  $validador=$row['validador'];
}
$filas=mysqli_num_rows($res);
if($filas>0){
  if ($validador!=0){
  session_start();
  $_SESSION['logeado']="SI";
  $_SESSION['persona']=$id_persona;
  $_SESSION['nombre']=$nombre;
  $con = new Conexion('localhost','root','','juegos');
  $a=$con->conectar();
  $update="UPDATE persona SET validador = '4' WHERE rut = '$rut' AND clave = '$clave'";
  $res=mysqli_query($a,$update);
  session_name("$rut");
  header("Refresh: 0; url=../index.php");
}else{
  echo "<script>alert('Su cuenta ha sido bloqueda o no existe');</script>";
  header("Refresh: 0; url=../home.php");
}
}else{
  $con = new Conexion('localhost','root','','juegos');
  $a=$con->conectar();
  $select="SELECT * FROM persona WHERE rut = '$rut'";
  $res=mysqli_query($a,$select);
  while ($row=$res->fetch_assoc()){
  $validador=$row['validador'];
}
  --$validador;
  if ($validador!=0){
  $update="UPDATE persona SET validador = '$validador' WHERE rut = '$rut'";
  $res=mysqli_query($a,$update);
  echo "<script>alert('Credenciales equivocadas le quedan $validador intentos');</script>";
  header("Refresh: 0; url=../home.php");
}else{
  $update="UPDATE persona SET validador = '0' WHERE rut = '$rut'";
  $res=mysqli_query($a,$update);
  echo "<script>alert('Su cuenta ha sido bloqueda o no existe');</script>";
  header("Refresh: 0; url=../home.php");
}
}
  mysqli_free_result($res);
  mysqli_close($con);
?>
