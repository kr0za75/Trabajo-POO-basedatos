<?php
include_once("conexion.php");
class persona extends Conexion {
    public $id,$correo,$nombre,$clave,$apellido,$rut, $telefono;
    function __construct($id,$correo,$nombre,$clave,$apellido,$rut,$telefono,$validador)
    {   //Se declara la función constructora
        $this->id=$id;
        $this->correo=$correo;
        $this->nombre=$nombre;
        $this->clave=$clave;
        $this->apellido=$apellido;
        $this->rut=$rut;
        $this->telefono=$telefono;  
        $this->validador=$validador;
    }
    function insertarPersona()
    {
        $sql="INSERT INTO persona (id,correo,nombre,clave,apellido,rut,telefono,validador) VALUES ('$this->id','$this->correo','$this->nombre','$this->clave','$this->apellido','$this->rut','$this->telefono','$this->validador')";
        $con = new Conexion('localhost','root','','juegos');
        $con->agregar($sql);
    }
}
