<?php
class Coche{

	protected $ruedas;
	var $color;
	protected $motor;

	function coche(){
		$this->ruedas=4;
		$this->color="";
		$this->motor=1600;

	}
	function get_ruedas(){
		return $this->ruedas;
	}
	function get_motor(){
		return $this->$motor;
	}
	function arrancar(){
		echo "ESTOY ARRANCANDO<br>";


	}
	function girar(){
		echo "ESTOY GIRANDO <br>";

		
	}
	function frenar(){
		echo "ESTOY FREANDO <br>";

		
	}
	function color($color,$nombre){
		$this->color=$color;
		echo "EL COLOR ES: $color DEL $nombre" . "<br>";

	}
	
}

/*--------------------------------------------------otta class*/

class Camion extends Coche{
	function camion(){
		$this->ruedas=16;
		$this->color="";
		$this->motor=3200;
	}

	function color($color,$nombre){
		$this->color=$color;
		echo "EL COLOR ES: $color DEL $nombre" . "<br>";

	}
	function arrancar(){
		parent::arrancar();
		echo "CAMION EN MARCHA<br>";


	}
}

	



?>