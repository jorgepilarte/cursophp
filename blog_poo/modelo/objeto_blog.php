<?php

class Objecto_Blog{

	//propiedades del obejto blog

	private $id;

	private $titulo;

	private $fecha;

	private $contenido;

	private $imagen;

	//Metodo de acceso getter y setter
	public function getId(){

		return $this->id;
	}

	public function setId($id){

		$this->id=$id;
	}

	public function getTitulo(){

		return $this->titulo;
	}

	public function setTitulo($titulo){

		$this->titulo=$titulo;
	}

	public function getFecha(){

		return $this->fecha;
	}

	public function setFecha($fecha){

		$this->fecha=$fecha;
	}

	public function getContenido(){

		return $this->contenido;
	}

	public function setContenido($contenido){

		$this->contenido=$contenido;
	}

	public function getImagen(){

		return $this->imagen;
	}

	public function setImagen($imagen){

		$this->imagen=$imagen;
	}



}


?>