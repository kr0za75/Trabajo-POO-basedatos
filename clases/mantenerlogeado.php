<?php
error_REPORTING(0);
  session_start(); 
  if($_SESSION["logeado"] != "SI"){
    header("location:home.php");
    exit();
  }
?>
