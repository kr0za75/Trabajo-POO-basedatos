<?php
include_once("conexion.php");
class jugador extends Conexion {    //Se declara la clase historial
    public $id_jugador,$persona_id,$externos_id,$preferencia_id,$pericia_id,$juego_id,$dedicacion_id,$historial_id,$tipo_jugador_id,$categoria_id; //Se declaran los atributos de la clase  
    function __construct($id_jugador,$persona_id,$externos_id,$preferencia_id,$pericia_id,$juego_id,$dedicacion_id,$historial_id,$tipo_jugador_id,$categoria_id)
    {   //Se declara la función constructora
        $this->id_jugador=$id_jugador;
        $this->persona_id=$persona_id;
        $this->externos_id=$externos_id;
        $this->preferencia_id=$preferencia_id;
        $this->pericia_id=$pericia_id;
        $this->juego_id=$juego_id;
        $this->dedicacion_id=$dedicacion_id;
        $this->historial_id=$historial_id;
        $this->tipo_jugador_id=$tipo_jugador_id;
        $this->categoria_id=$categoria_id;
    }
    function insertarJugador()  
    {   //Se declara la función insertarJugador
        $sql="INSERT INTO jugador (id_jugador,persona_id,externos_id,preferencia_id,pericia_id,juego_id,dedicacion_id,historial_id,tipo_jugador_id,categoria_id) VALUES ('$this->id_jugador','$this->persona_id','$this->externos_id','$this->preferencia_id','$this->pericia_id','$this->juego_id','$this->dedicacion_id','$this->historial_id','$this->tipo_jugador_id','$this->categoria_id')";
        $con = new Conexion('localhost','root','','juegos');
        $con->agregarJugador($sql);
    }
}
?>