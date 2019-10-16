<?php
//variable
$id='';

$tipo='';

$nombre='';

$contenido='';

//conexion
include 'conectar.php';

//codigo sql
$sql="SELECT * FROM archivo WHERE id=8";

$consulta=mysqli_query($conexion, $sql);

while($fila=mysqli_fetch_array($consulta)){


	$id=$fila["id"] . $tipo=$fila["tipo"] . $nombre=$fila["nombre"];

	//$tipo=$fila["tipo"];
	//$nombre=$fila["nombre"];
	//$contenido=$fila["contenido"]; 

	
}
echo "ID: " . $id . "<br";

echo "TIPO: " . $tipo . "<br";

echo "NOMBRE: " . $nombre . "<br";

echo "<img src='data:image/jpeg; base64," . base64_decode($contenido) . "'>";

?>