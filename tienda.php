<?php 
require_once("conexion.php");
class Tienda extends Conexion{
	public function alta() {
		//$id_tienda=$_POST["id_tienda"];
		$ti_nom=$_POST["ti_nom"];
		$ti_ubi=$_POST["ti_ubi"];

		$this->sentencia = "INSERT INTO tienda VALUES (null,'$ti_nom','$ti_ubi');";
		$this->ejecutar_sentencia();
	}
	public function consulta() {
		$this->sentencia = "SELECT * FROM tienda";
		return $this->obtener_sentencia();
	}
	public function baja() {
		$id_tienda = $_POST["id_tienda"];
		$this->sentencia = "DELETE FROM tienda WHERE id_tienda=$id_tienda";
		$this->ejecutar_sentencia();
	}
	public function modificar() {
		$this->sentencia ="UPDATE tienda SET ti_nom='$ti_nom',ti_ubi='$ti_ubi' WHERE id_tienda='$id_tienda'";
		return $this->modificarC();
	}
}
?>