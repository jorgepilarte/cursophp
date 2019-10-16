<?php
//conexion
include 'conexionPDO.php';

//codigo sql
$sql="SELECT foto FROM usuarios WHERE nombre='oscar'";

$consulta=mysqli_query($conexion, $sql);

while($fila=mysqli_fetch_array($consulta)){


	$nombre_img=$fila["foto"];
}

?>

<div>
	<img src="/cursophp/upimagen/<?php echo $nombre_img; ?>" alt="Fotos de la BBDD" width="50%">
</div>