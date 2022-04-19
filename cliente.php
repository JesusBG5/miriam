<?php 
require_once("conexion.php");
class Cliente extends Conexion{
	public function alta() {
		$id_cliente=$_POST["id_cliente"];
		$cl_nom=$_POST["cl_nom"];
		$cl_tel=$_POST["cl_tel"];
		$cl_direc=$_POST["cl_direc"];

		$this->sentencia = "INSERT INTO cliente VALUES (null,'$cl_nom','$cl_tel','$cl_direc');";
		$this->ejecutar_sentencia();
	}
	public function consulta() {
		$this->sentencia = "SELECT * FROM cliente";
		return $this->obtener_sentencia();
	}
	public function baja() {
		$id_cliente = $_POST["id_cliente"];
		$this->sentencia = "DELETE FROM cliente WHERE id_cliente=$id_cliente";
		$this->ejecutar_sentencia();
	}
	public function modificar() {
		$this->sentencia ="UPDATE cliente SET id_cliente='$id_cliente', cl_nom='$cl_nom',cl_tel='$cl_tel',cl_direc='$cl_direc' WHERE id_cliente='$id_cliente'";
		return $this->modificarC();
	}
}
?>