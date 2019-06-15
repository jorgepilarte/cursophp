<?php

$conex=mysqli_connect("localhost","root","","cursophp");

if(mysqli_connect_errno()){
	echo "ERROR EN LA CONEXION";
	exit();
}

mysqli_set_charset($conex,"utf8");


?>