<?php 
require_once("conexion.php");//Comprobacion de cambios
class Abono extends Conexion{
	public function alta() {
		$id_abono=$_POST["id_abono"];
		$ab_monto=$_POST["ab_monto"];
		$ab_fecha=$_POST["ab_fecha"];

		$this->sentencia = "INSERT INTO abono VALUES (null,'$ab_monto','$ab_fecha');";
		$this->ejecutar_sentencia();
	}
	public function consulta() {
		$this->sentencia = "SELECT * FROM abono";
		return $this->obtener_sentencia();
	}
	public function baja() {
		$id_abono = $_POST["id_abono"];
		$this->sentencia = "DELETE FROM abono WHERE id_abono=$id_abono";
		$this->ejecutar_sentencia();
	}
	public function modificar() {
		$this->sentencia ="UPDATE abono SET id_abono='$id_abono', ab_monto='$ab_monto',ab_fecha='$ab_fecha' WHERE id_abono='$id_abono'";
		return $this->modificarC();
	}
}
?>