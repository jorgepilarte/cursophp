<?php

include 'objeto_blog.php';

class Manejo_Objecto{

	private $conexion;

	public function __Construct ($conexion){

		$this->setconexion($conexion);

	}

	public function setConexion(PDO $conexion){

		$this->conexion=$conexion;

	}

	public function getContenidoPorFecha(){

		$matriz=array();

		$contador=0;

		$resultado=$this->conexion->query("SELECT * FROM blog ORDER BY fecha DESC");

		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

			$blog=new Objecto_Blog();

			$blog->setId($registro["id"]);
			$blog->setTitulo($registro["titulo"]);
			$blog->setFEcha($registro["fecha"]);
			$blog->setContenido($registro["contenido"]);
			$blog->setImagen($registro["imagen"]);

			$matriz[$contador]=$blog;

			$contador++;
		}

		return $matriz;
	}

	public function insertaContenido(Objecto_Blog $blog){

		$sql="INSERT INTO blog (titulo, fecha, contenido, imagen) VALUES ('" . $blog->getTitulo() . "','" . $blog->getFecha() . "','" . $blog->getContenido() . "','" . $blog->getImagen() . "')";

		$this->blog=$blog;
	}
}




?>