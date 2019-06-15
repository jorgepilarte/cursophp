<?php

$conex=mysqli_connect("localhost","root","");

if($conex){
	echo "CONEXION EXISTOSA";
}else{
	echo"FALLO EN LA CONEXION";
	die(print_r(sqlsrv_errors(),true));
}



?>