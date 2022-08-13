<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

include("../../modelo/Conexion.php");
include("../../modelo/dao/dao_personas.php");
include("../../modelo/entidades/persona.php");

$id = $_GET["id"];
$objDatos = new Persona($id, "","");
$objControlDatos = new DAOPersonas($objDatos);
$datos = $objControlDatos->eliminar();
echo '
<script language="javascript">
alert("Registro eliminado con exito"); 
window.location="listar.php";
</script>';
