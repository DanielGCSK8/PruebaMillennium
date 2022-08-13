<?php

class DAOPersonas
{
    var $objDatos;

    function __construct($objDatos)
    {
        $this->objDatos = $objDatos;
    }

    function guardar()
    {
        $nombre = $this->objDatos->getNombre();
        $apellido = $this->objDatos->getApellido();
        $objControlConexion = new Conexion();
        $objControlConexion->abrirBd("localhost", "root", "", "pruebamillennium");
        $cmdSql = "INSERT INTO persona(nombre,apellido) VALUES('$nombre','$apellido')";
        $objControlConexion->ejecutarComandoSql($cmdSql);
        $objControlConexion->cerrarBd();

    }

    function Listar()
    {
        $objControlConexion = new Conexion();
        $objControlConexion->abrirBd("localhost", "root", "", "pruebamillennium");
        $recordset = $objControlConexion->ejecutarSelect("SELECT * FROM persona");
        return $recordset;
    }

    function consultar()
    {
        $id = $this->objDatos->getId();
        $objConexion = new Conexion();
		$objConexion->abrirBd("localhost", "root", "", "pruebamillennium");
		$comandoSql = "SELECT * FROM `persona` WHERE `id` = '" . $id . "'";
		$rd = $objConexion->ejecutarSelect($comandoSql);
		if ($row = mysqli_fetch_array($rd)) {
			$this->objDatos->setNombre($row["nombre"]);
			$this->objDatos->setApellido($row["apellido"]);
		}
		return $this->objDatos;
		$objConexion->cerrarBd();
    }

    function editar()
    {
        $id = $this->objDatos->getId();
        $nombre = $this->objDatos->getNombre();
        $apellido = $this->objDatos->getApellido();
        $objConexion = new Conexion();
        $objConexion->abrirBd("localhost", "root", "", "pruebamillennium");
        $comandoSql = "UPDATE persona SET nombre='$nombre',apellido='$apellido' WHERE id='$id'";
        $this->result = $objConexion->ejecutarComandoSql($comandoSql);
		$objConexion->cerrarBd();
    }

    function eliminar()
    {
        $id = $this->objDatos->getId();
		$objConexion = new Conexion();
		$objConexion->abrirBd("localhost", "root", "", "pruebamillennium");
		$comandoSql = "DELETE FROM persona  WHERE id='$id'";
		$this->result = $objConexion->ejecutarComandoSql($comandoSql);
		$objConexion->cerrarBd();
	
    }
}

?>