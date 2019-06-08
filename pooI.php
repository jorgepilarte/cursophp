<?php
class Coche{

	var $ruedas;
	var $color;
	var $motor;

	function Coche(){
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
	
}

$renault=new Coche();
$mazda=new Coche();
$seat=new Coche();

$seat->girar();
echo $seat->ruedas;


/*vedo21- */
?>