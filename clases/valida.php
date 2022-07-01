<?php
include_once('conexion.php');
$rut=$_POST['rutlog'];  //Se recibe el rut del jugador que quiere ingresar al sistema
$clave=$_POST['clavelog'];  //Se recibe la clave del jugador que quiere ingresar al sistema
$con = new Conexion('localhost','root','','juegos');  //Se crea una nueva conexión a la base de datos
$a=$con->conectar();  //Se conecta a la base de datos
$select="SELECT * FROM persona WHERE rut = '$rut' AND clave = '$clave'";  //Se crea la sentencia SQL para buscar al jugador en la base de datos
$res=mysqli_query($a,$select);  //Se ejecuta la sentencia SQL
while ($row=$res->fetch_assoc()){ 
  $id_persona=$row['id']; //Se almacena el id de la persona en una variable
  $nombre=$row['nombre']; //Se almacena el nombre de la persona en una variable
  $validador=$row['validador']; //Se almacena el validador de la persona en una variable
}
$filas=mysqli_num_rows($res); //Se cuenta el número de filas que devuelve la sentencia SQL
if($filas>0){ //Si el número de filas es mayor a 0, es que el jugador existe en la base de datos
  if ($validador!=0){ 
  session_start();  //Se inicia la sesión
  $_SESSION['logeado']="SI";  //Se almacena en la variable de sesión que el jugador está logeado
  $_SESSION['persona']=$id_persona;   //Se almacena en la variable de sesión el id de la persona que está logeado
  $_SESSION['nombre']=$nombre;  //Se almacena en la variable de sesión el nombre del jugador
  $con = new Conexion('localhost','root','','juegos');  //Se crea una nueva conexión a la base de datos
  $a=$con->conectar();  //Se conecta a la base de datos
  $update="UPDATE persona SET validador = '4' WHERE rut = '$rut' AND clave = '$clave'"; //Se crea la sentencia SQL para actualizar el validador de la persona en la base de datos
  $res=mysqli_query($a,$update);  //Se ejecuta la sentencia SQL
  session_name("$rut"); //Se le asigna el nombre de la sesión al rut del jugador
  header("Refresh: 0; url=../index.php"); //Se redirecciona al usuario a la página principal del sistema
}else{
  echo "<script>alert('Su cuenta ha sido bloqueda o no existe');</script>"; //Se muestra una alerta al usuario que su cuenta ha sido bloqueada o no existe
  header("Refresh: 0; url=../home.php");  //Se redirecciona al usuario a la página de inicio del sistema
}
}else{  //Si el número de filas es menor a 0, es que el jugador no existe en la base de datos
  $con = new Conexion('localhost','root','','juegos');    //Se crea una nueva conexión a la base de datos
  $a=$con->conectar();  //Se conecta a la base de datos
  $select="SELECT * FROM persona WHERE rut = '$rut'"; //Se crea la sentencia SQL para buscar al jugador en la base de datos
  $res=mysqli_query($a,$select);  //Se ejecuta la sentencia SQL
  while ($row=$res->fetch_assoc()){   
  $validador=$row['validador']; 
}
  --$validador; //Se decrementa el validador de la persona en 1
  if ($validador!=0){ 
  $update="UPDATE persona SET validador = '$validador' WHERE rut = '$rut'"; //Se crea la sentencia SQL para actualizar el validador de la persona en la base de datos
  $res=mysqli_query($a,$update);  //Se ejecuta la sentencia SQL
  echo "<script>alert('Credenciales equivocadas le quedan $validador intentos');</script>";
  header("Refresh: 0; url=../home.php");
}else{
  $update="UPDATE persona SET validador = '0' WHERE rut = '$rut'";  //Se crea la sentencia SQL para actualizar el validador de la persona en la base de datos
  $res=mysqli_query($a,$update);  //Se ejecuta la sentencia SQL
  echo "<script>alert('Su cuenta ha sido bloqueda o no existe');</script>";
  header("Refresh: 0; url=../home.php");
}
}
  mysqli_free_result($res);
  mysqli_close($con);
?>
