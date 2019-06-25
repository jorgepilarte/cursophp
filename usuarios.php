<?php

include 'conexionMYSQL.php';

$user=mysqli_escape_string($conex, $_GET['user']);
$pass=mysqli_escape_string($conex, $_GET['pass']);

$dele= "DELETE FROM USUARIOS WHERE USER='$user' AND PASS=$pass";
//$sele="SELECT *FROM USUARIOS";

if(mysqli_query($conex,$dele)){
	echo "ELIMINADO";
}else{
	echo "NO ELIMINADO";
}

mysqli_close($conex);
?>