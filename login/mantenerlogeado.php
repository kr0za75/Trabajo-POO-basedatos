<?php
error_REPORTING(0); 
  session_start();  //Iniciar sesión
  if($_SESSION["logeado"] != "SI"){ //Si no está logueado, redireccionar a login.php
    header("location:home.php");
    exit();
  }
?>
