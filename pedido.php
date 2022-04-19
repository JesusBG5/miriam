<?php 
require_once("conexion.php");
class Pedido extends Conexion{
	public function alta() {
		//$id_pedido=$_POST["id_pedido"];
		$pe_cliente=$_POST["pe_cliente"];
		$pe_prec=$_POST["pe_prec"];
		$pe_direc=$_POST["pe_direc"];
		$pe_fecha=$_POST["pe_fecha"];

		$this->sentencia = "INSERT INTO pedido VALUES (null,'$pe_cliente','$pe_prec','$pe_direc','$pe_fecha');";
		$this->ejecutar_sentencia();
	}
	public function consulta() {
		$this->sentencia = "SELECT * FROM pedido";
		return $this->obtener_sentencia();
	}
	public function baja() {
		$id_pedido = $_POST["id_pedido"];
		$this->sentencia = "DELETE FROM pedido WHERE id_pedido=$id_pedido";
		$this->ejecutar_sentencia();
	}
	public function modificar() {
		$this->sentencia ="UPDATE pedido SET pe_cliente='$pe_cliente',pe_prec='$pe_prec',pe_direc='$pe_direc',pe_fecha='$pe_fecha' WHERE id_pedido='$id_pedido'";
		return $this->modificarC();
	}
	public function comboCliente(){
		$this->sentencia = "SELECT cl_nom, id_cliente FROM cliente";
		$combo= "<select name= 'pe_cliente'>";
		$resultado= $this->obtener_sentencia();
		while($fila=$resultado->fetch_assoc()){
			$id=$fila["id_cliente"];
			$nombre=$fila["cl_nom"];
			$combo=$combo."<option value='$id'>$nombre</option>";
		}
		$combo=$combo."</select>";    
		return $combo;
	}
}
?>