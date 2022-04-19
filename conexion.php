<?php
class Conexion{
	private static $host = 'localhost';
	private static $usuario = 'root';
	private static $password = '';
	protected $base = 'sprogram_servicio';
	protected $sentencia;
	private $conexion;

	private function abrir_conexion(){
		$this->conexion = new mysqli(self::$host, self::$usuario, self::$password, $this->base);
	}

	private function cerrar_conexion(){
		$this->conexion->close();
	}

	protected function ejecutar_sentencia(){
		$this->abrir_conexion();
		$this->conexion->query($this->sentencia);
	}

	protected function obtener_sentencia(){
		$this->abrir_conexion();
		$result = $this->conexion->query($this->sentencia);
		return $result;
	}
}
?>