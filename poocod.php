<?php
class Coche{

	var $ruedas;
	var $color;
	var $motor;

	function coche(){
		$this->ruedas=4;
		$this->color="";
		$this->motor=1600;

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
		echo "EL COLOR ES: $color" . "DEL" . $nombre . "<br>";

	}
	
}

/*--------------------------------------------------otta class*/

class Camion extends Coche{
	function camion(){
		$this->ruedas=16;
		$this->color="";
		$this->motor=3200;
	}
}

	



?>