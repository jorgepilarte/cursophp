<?php
include 'conexionPDO.php';

$sql= "SELECT * FROM usuarios";

$resul=$conexion->query($sql);

while($fila=$resul->fetch_assoc()){

	

	echo $fila['nombre'] . " " ;
	echo $fila['user'] . " " ;
	echo $fila['direcion'] . " " ;
	echo $fila['telefono'] . " " ;
}





?>