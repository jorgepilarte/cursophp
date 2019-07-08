<?php 
include 'pooconexion.php';

class DevProductos extends conexion{

	public function DevProductos(){

		parent::__construct();
	}

	public function get_productos(){

		$resul=$this->conexiondb->query("SELECT * FROM login");

		$user=$resul->fetch_all(MYSQLI_ASSOC);

		return $user;
	}


}


?>

