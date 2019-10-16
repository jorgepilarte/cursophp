<?php

include '../modelo/manejo_objecto.php';

try{
	$conexion= new PDO("mysql:host=localhost; dbname=cursophp", "root", "");

	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$conexion->exec("set character set utf8");


	$manejo_objecto=new Manejo_Objecto($conexion);

	$tabla=$manejo_objecto->getContenidoPorFecha();

	if(empty($tabla)){

		echo "No hay entradas de Blog";

	}else{

		foreach($tabla as $valor){

			echo "<h3>" . $valor->getTitulo() . "</h3>";

			echo "<h4>" . $valor->getFecha() . "</h4>";

			echo "<div style='width:320px'>";
			echo $valor->getContenido() . "</div>";

			if($valor->getImagen()!=""){

				echo "<img src='../imagenes/";
				echo $valor->getImagen() . "' width='300px' height='200px'/>";
			}

			echo "<hr/>";
		}

		}
	



	}catch(Exception $e){

	die("Error: " . $e->GetMessage());

	echo $conexion->Getline();

}finally{

	$base=null;
}



  ?>