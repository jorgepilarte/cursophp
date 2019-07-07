<?php
include 'pooconfig.php';

class Conexion{
	
	protected $conexiondb;


	public function conexion(){

		$this->conexiondb=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if($this->conexiondb->connect_errno){

			echo "FALLO AL CONECTAR " . $this->conexiondb->connect_errno . "<br>";

			//echo $this->$conexion->getline();

			return;
		}

		$this->conexiondb->set_charset(DB_CHARSET);
	}
}



?>