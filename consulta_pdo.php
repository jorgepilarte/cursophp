<?php
$user=$_GET['user'];

include 'conPDO.php';

$sql= "SELECT nombre, user, pass, direcion, telefono FROM usuarios WHERE nombre= ?";

$resul=$conexion->prepare($sql);

$resul->execute(array("$user"));

while($fila=$resul->fetch(PDO::FETCH_ASSOC)){

	echo $fila['nombre'] . " ";
	echo $fila['user'] . " ";
	echo $fila['pass'] . " ";
	echo $fila['direcion'] . " ";
	echo $fila['telefono'] . " ";
}

$resul->closecursor();

?>