<?php
include_once("conexion.php");
class persona extends Conexion {    //Se declara la clase historial
    public $id,$correo,$nombre,$clave,$apellido,$rut, $telefono;    //Se declaran los atributos de la clase
    function __construct($id,$correo,$nombre,$clave,$apellido,$rut,$telefono,$validador)
    {   //Se declara la función constructora
        $this->id=$id;  //Se asigna el valor del atributo id a la variable $id
        $this->correo=$correo;  //Se asigna el valor del atributo correo a la variable $correo
        $this->nombre=$nombre;  //Se asigna el valor del atributo nombre a la variable $nombre
        $this->clave=$clave;    //Se asigna el valor del atributo clave a la variable $clave
        $this->apellido=$apellido;  //Se asigna el valor del atributo apellido a la variable $apellido
        $this->rut=$rut;    //Se asigna el valor del atributo rut a la variable $rut
        $this->telefono=$telefono;      //Se asigna el valor del atributo telefono a la variable $telefono
        $this->validador=$validador;    //Se asigna el valor del atributo validador a la variable $validador
    }
    function insertarPersona()  
    {   //Se declara la función insertarPersona
        $sql="INSERT INTO persona (id,correo,nombre,clave,apellido,rut,telefono,validador) VALUES ('$this->id','$this->correo','$this->nombre','$this->clave','$this->apellido','$this->rut','$this->telefono','$this->validador')";
        $con = new Conexion('localhost','root','','juegos');
        $con->agregar($sql);
    }
}
