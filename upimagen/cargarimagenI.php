<?php 
// Recibimos los datos de la imagen
$nombre_imagen=$_FILES['img']['name'];

$tipo_imagen=$_FILES['img']['type'];

$tamano_imagen=$_FILES['img']['size'];

//echo $tipo_imagen;
if($tamano_imagen<=5000000){

	if($tipo_imagen=="image/jpeg" || $tipo_imagen=="imagen/gif" || $tipo_imagen=="imagen/jpg" || $tipo_imagen=="imagen/png"){


//Ruta de la carpeta de destino en el servidor
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] .'/cursophp/upimagen/'; 

//Movemos la imadel deritorio temporal al directorio escogido
move_uploaded_file($_FILES['img']['tmp_name'],$carpeta_destino.$nombre_imagen);
}else{
	echo "SOLO SE ACEPTAN JPEG-PNG-JPG";
}
}else{
	echo "EXEDE EL TAMANAO DE LA IMAGEN";
}

//Vamos hacer conexion con la base de datos

include 'conexionPDO.php';

$sql="UPDATE usuarios set foto='$nombre_imagen' where nombre='oscar'";
//echo $nombre_imagen;
//$sql="INSERT INTO usuarios (foto) VALUES ($nombre_imagen)";

//$sql="UPDATE `usuarios` SET `foto`=['$nombre_imagen'] WHERE nombre='oscar'";

//$resultado=$conexion->prepare($sql);

//$resultado=execute();

$resultado=mysqli_query($conexion, $sql);


 ?>