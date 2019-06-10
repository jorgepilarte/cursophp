<?php
class Compra{
	private $precio;


function Compra($modelo){
	if($modelo=="normal"){
		$this->precio=25000;
	}else if($modelo=="sport"){
		$this->precio=30000;
	}else if($modelo=="platinum"){
		$this->precio=35000;
	}else {
		$this->precio=40000;
	}
}

	function preciofinal(){
		return $this->precio;
	}


}

?>