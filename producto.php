<?php 
require_once("conexion.php");
class Producto extends Conexion{
	public function alta() {
		$id_producto=$_POST["id_producto"];
		$p_cost=$_POST["p_cost"];
		$p_precio=$_POST["p_precio"];
		$p_nombre=$_POST["p_nombre"];
		$p_descri=$_POST["p_descri"];

		$this->sentencia = "INSERT INTO productos VALUES (null,'$p_cost','$p_precio','$p_nombre','$p_descri');";
		$this->ejecutar_sentencia();
	}
	public function consulta() {
		$this->sentencia = "SELECT * FROM productos";
		return $this->obtener_sentencia();
	}
	public function baja() {
		$id_producto = $_POST["id_producto"];
		$this->sentencia = "DELETE FROM productos WHERE id_producto=$id_producto";
		$this->ejecutar_sentencia();
	}
	public function modificar() {
		$this->sentencia ="UPDATE productos SET id_producto='$id_producto', p_cost='$p_cost',p_precio='$p_precio',p_nombre='$p_nombre',p_descri='$p_descri' WHERE id_producto='$id_producto'";
		return $this->modificarC();
	}
}
?>