<?php

class persona{
    
    var $id;
    var $nombre;
    var $apellido;

    function __construct($id,$nombre,$apellido){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellido=$apellido;

    }

    function setId($id) { $this->id = $id; }
    function getId() { return $this->id; }

    function setNombre($nombre) { $this->nombre = $nombre; }
    function getNombre() { return $this->nombre; }

    function setApellido($apellido) { $this->apellido = $apellido; }
    function getApellido() { return $this->apellido; }

}



?>