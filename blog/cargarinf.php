<?php
include 'conectar.php';

if($_FILES["imagen"]["error"]){

	switch ($_FILES["imagen"]["error"]) {

		case '1':
			echo "El fichero subido excede la directiva upload_max_filesize de php.ini.";
			break;

			case '2':
			echo "El fichero subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML.";
			break;

			case '3':
			echo "El fichero fue sólo parcialmente subido";
			break;

			case '4':
			echo "No se subió ningún fichero";
			break;

			case '5':
			echo "No se subió ningún fichero";
			break;

			case '6':
			echo "Falta la carpeta temporal. Introducido en PHP 5.0.3.";
			break;

		
		
	}
}else{

	echo "Entrada subida correctamente" . "<br/><br/>";

	if((isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"]==UPLOAD_ERR_OK))){

		$destino_ruta="imagenes/";

		move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_ruta . $_FILES["imagen"]["name"]);

		echo "La imagen" . $_FILES["imagen"]["name"] . "Se ha movido correctamente" . "<br/><br/>";
	}else{

		echo "La imagen no se ha movido". "<br/><br/>";
	}
}

//declarar variable

$titulo=$_POST["titulo"];

$fecha=date("Y-m-d H:i:s");

$contenido=$_POST["comentarios"];

$imagen=$_FILES["imagen"]["name"];


$sql="INSERT INTO blog (titulo, fecha, contenido, imagen)  VALUES ('" . $titulo . "', '" . $fecha . "', '" . $contenido . "', '" . $imagen . "')";

//$sql="INSERT INTO `blog`(`id`, `titulo`, `fecha`, `contenido`, `imagen`) VALUES ([],['$titulo'],['$fecha'],['$contenido'],['$imagen'])";

$resul=mysqli_query($conexion, $sql);

// cerramos la conexion

mysqli_close($conexion);

echo "<br/> Se ha agregado el comentario. <br/><br/>";

?>

<a href="verblog.php"> Ir al blog</a><br/><br/>

<a href="formblog.php"> Ir al form</a><br/>