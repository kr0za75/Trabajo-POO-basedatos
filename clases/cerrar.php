<?php
  session_start();
  session_destroy();
  echo "<script>alert('Se cerró la sesión');</script>";
  header("Refresh: 0; url=../index.php");
?>
