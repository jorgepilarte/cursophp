<?php

$server="10.0.0.85";
$conectionInfo=array("Database"=>"cursophp","UID"=>"sa","PWD"=>"Jdsl0426","CharacterSet"=>"UTF-8");
$con_sis=sqlsrv_connect($server, $conectionInfo);

if(sqlsrv_connect_errno()){
	echo "ERROR EN LA CONEXION";
	exit();
}

if($con_sis){
	echo "CONEXION EXISTOSA";
}else{
	echo"FALLO EN LA CONEXION";
	die(print_r(sqlsrv_errors(),true));
}


?>