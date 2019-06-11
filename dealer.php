<?php
class Compra{
	private $precio;
	private static $ayuda=0;

	function compra(){
		$this->precio;
	}

	function fact($model){
		if($model=="standar"){
			$this->precio=25000;
		}
	}

	function add($add){
		if($add=="leather"){
			$this->precio+=5000;
		}elseif ($add=="aros"){
			$this->precio+=10000;
		}
	}

	static function descgov(){
		
		self::$ayuda=4500;

	}

	function precio(){
		$valor=$this->precio-self::$ayuda;
		return $valor;
	}
}
?>