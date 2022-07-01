<?php
  session_start();  //Iniciar sesión
  session_destroy();  //Destruir sesión
  echo "<script>alert('Se cerró la sesión');</script>"; //Alerta de cerrar sesión
  header("Refresh: 0; url=../index.php"); //Redireccionar a login.php
?>
