<?php

class Ventalot_modelo{

	private $db;

	private $ventalot;

	public function __construct(){

		include("modelo/conectar.php");

		$this->db=Conectar::conexion();

		$this->ventalot=array();

	}

	public function get_ventalot(){

		$sql=$this->db->query("SELECT * FROM VENTALOT");

		while ($reg=$sql->fetch(PDO::FETCH_ASSOC)) {
			
			$this->ventalot[]=$reg;
		}

		return $this->ventalot;
		
		

	}
}

?>