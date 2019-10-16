<?php
// conectar a la base de datos usando programacion orientada a objetos ej.

$conexion=new mysqli("localhost","root","","cursophp");

$conexion->set_charset("utf8");

if($conexion->connect_errno){

	echo "error en la conexion " . $conexion->connect_errno;
}

if($conexion->errno){

	die($conexion->error);
}




?>