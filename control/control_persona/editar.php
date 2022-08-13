<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

include("../../modelo/Conexion.php");
include("../../modelo/dao/dao_personas.php");
include("../../modelo/entidades/persona.php");

$id = $_POST['Id'];
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$objDatos = new Persona($id,$nombre, $apellido);
$objControlDatos = new DAOPersonas($objDatos);
$objControlDatos->editar();