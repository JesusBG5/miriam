<?php 
require_once("conexion.php");
class cuentaPagar extends Conexion{
	public function alta() {
		//$id_cuenta=$_POST["id_cuenta"];
		$cu_deuda=$_POST["cu_deuda"];
		$cu_pedido=$_POST["cu_pedido"];
		$cu_fecha=$_POST["cu_fecha"];

		$this->sentencia = "INSERT INTO cuenta_pagar VALUES (null,'$cu_deuda','$cu_pedido','$cu_fecha');";
		$this->ejecutar_sentencia();
	}
	public function consulta() {
		$this->sentencia = "SELECT * FROM cuenta_pagar";
		return $this->obtener_sentencia();
	}
	public function baja() {
		$id_cuenta = $_POST["id_cuenta"];
		$this->sentencia = "DELETE FROM cuenta_pagar WHERE id_cuenta=$id_cuenta";
		$this->ejecutar_sentencia();
	}
	public function modificar() {
		$this->sentencia ="UPDATE cuenta_pagar SET cu_deuda='$cu_deuda',cu_pedido='$cu_pedido',cu_fecha='$cu_fecha' WHERE id_cuenta='$id_cuenta'";
		return $this->modificarC();
	}
}
?>