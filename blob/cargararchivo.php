<?php 
// Recibimos los datos de la imagen
$nombre_archivo=$_FILES['archivo']['name'];

$tipo_archivo=$_FILES['archivo']['type'];

$tamano_archivo=$_FILES['archivo']['size'];

//echo $tipo_imagen;
if($tamano_archivo<=500000000){

	//if($tipo_imagen=="image/jpeg" || $tipo_imagen=="imagen/gif" || $tipo_imagen=="imagen/jpg" || $tipo_imagen=="imagen/png"){


//Ruta de la carpeta de destino en el servidor
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] .'/cursophp/blob/'; 

//Movemos la imadel deritorio temporal al directorio escogido
move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$nombre_archivo);
//}else{
//	echo "SOLO SE ACEPTAN JPEG-PNG-JPG";
//}
}else{
	echo "EXEDE EL TAMANAO DE LA IMAGEN";
}

//Vamos hacer conexion con la base de datos

include 'conectar.php';

$archivo_obj=fopen($carpeta_destino . $nombre_archivo, "r");

$contenido=fread($archivo_obj, $tamano_archivo);

$contenido=addslashes($contenido);

fclose($archivo_obj);


//$sql="UPDATE usuarios set foto='$nombre_imagen' where nombre='oscar'";
//echo $nombre_imagen;
$sql="INSERT INTO archivo (id, nombre, tipo, contenido) VALUES (0,'$nombre_archivo', '$tipo_archivo', '$contenido')";

//$sql="UPDATE `usuarios` SET `foto`=['$nombre_imagen'] WHERE nombre='oscar'";

//$resultado=$conexion->prepare($sql);

//$resultado=execute();

$resultado=mysqli_query($conexion, $sql);

if(mysqli_affected_rows($conexion)>o){

	echo "SE HA INSERTADO EL REGISTRO";

}else{

	echo "NO SE HA INSERTADO EL REGISTRO";
}


 ?>