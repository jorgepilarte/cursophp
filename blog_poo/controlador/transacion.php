<?php
include '../modelo/manejo_objecto.php';


try{
	$conexion= new PDO("mysql:host=localhost; dbname=cursophp", "root", "");

	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$conexion->exec("set character set utf8");

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

		$destino_ruta="../imagenes/";

		move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_ruta . $_FILES["imagen"]["name"]);

		echo "La imagen" . $_FILES["imagen"]["name"] . " Se ha movido correctamente" . "<br/><br/>";
	}else{

		echo "La imagen no se ha movido" . "<br/><br/>";
	}
}

$manejo_objecto=new Manejo_Objecto($conexion);

$blog=new Objecto_Blog();

$blog->setTitulo(htmlentities(addslashes($_POST["titulo"]), ENT_QUOTES));

$blog->setFecha(date("Y-m-d H:i:s"));

$blog->setContenido(htmlentities(addslashes($_POST["comentarios"]), ENT_QUOTES));

$blog->setImagen($_FILES["imagen"]["name"]);

$manejo_objecto->insertaContenido($blog);

echo "ENTRA DE BLOG AGREGADA CON EXITO" . "<br>" . "<br>";


}catch(Exception $e){

	die("Error: " . $e->GetMessage());

	echo $conexion->Getline();

}finally{

	$base=null;
}



?>
<a href="../vista/verblog.php"> Ir al blog</a><br/><br/>

<a href="../vista/form.php"> Ir al form</a><br/>