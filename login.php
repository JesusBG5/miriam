<?php 
require_once("conexion.php");
class Login extends Conexion{
	public function alta() {
		//$id_login=$_POST["id_login"];
		$log_nom=$_POST["log_nom"];
		$log_contra=$_POST["log_contra"];
		$log_usuario=$_POST["log_usuario"];

		$this->sentencia = "INSERT INTO login VALUES (null,'$log_nom','$log_contra','$log_usuario');";
		$this->ejecutar_sentencia();
	}
	public function consulta() {
		$this->sentencia = "SELECT * FROM login";
		return $this->obtener_sentencia();
	}
	public function baja() {
		$id_login = $_POST["id_login"];
		$this->sentencia = "DELETE FROM login WHERE id_login=$id_login";
		$this->ejecutar_sentencia();
	}
	public function modificar() {
		$this->sentencia ="UPDATE login SET log_nom='$log_nom',log_contra='$log_contra',log_usuario='$log_usuario' WHERE id_login='$id_login'";
		return $this->modificarC();
	}
}
?>