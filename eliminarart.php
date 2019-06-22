<?php
$seccion=$_GET['seccion'];
$articulo=$_GET['articulo'];
$fecha=$_GET['fecha'];
$pais=$_GET['pais'];
$precio=$_GET['precio'];
include 'conexionMYSQL.php';

$insertar= "DELETE FROM `artículos` WHERE SECCIÓN = '$seccion'";
$resultados=mysqli_query($conex,$insertar);

if(mysqli_affected_rows($conex)==0){
	echo "NO HAY REGISTRO QUE ELIMINAR";
}else{
	echo "SE HA ELIMINADO " . mysqli_affected_rows($conex) . " REGISTRO ";
}


mysqli_close($conex);

?>