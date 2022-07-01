<?php
error_reporting(0);
class Conexion  //Se declara la clase Conexion
{
  private $server, $usuario, $pass, $database;  //Se declaran los atributos de la clase
  function __construct($server,$user,$pass,$database) 
  {
    $this->server=$server;
    $this->user=$user;
    $this->pass=$pass;
    $this->database=$database;
  }

  public function conectar(){ //Se declara la función conectar
         $conexion = mysqli_connect($this->server, $this->user, $this->pass, $this->database);
         if (!$conexion) {
             die("Conexion Fallida: " . mysqli_connect_error());
         }else {
           return $conexion;
         }
       }

    public function consulta_recibir($consulta,$con_bbdd){  //Se declara la función consulta_recibir
      $resultado = mysqli_query($con_bbdd, $consulta);

      return $resultado;

    }

  function agregar($insert){  //Se declara la función agregar
    $con = mysqli_connect($this->server,$this->user,$this->pass,$this->database);
    $res = $con->query($insert);
    if($res){
      header("Location:../register.php");
    }else{
      echo "Error al insertar";
    }
  }
  function agregarJugador($insert){ //Se declara la función agregarJugador
    $con = mysqli_connect($this->server,$this->user,$this->pass,$this->database);
    $res = $con->query($insert);
    if($res){
      header("Location:../index.php?id=1");
    }else{
        echo "<h1>Error:".$res."</h1><br><h2>Descripcion:".mysqli_error($con)."</h2>";
      }

}
}
