<?php
$seccion=$_GET['seccion'];
$articulo=$_GET['articulo'];
$fecha=$_GET['fecha'];
$pais=$_GET['pais'];
$precio=$_GET['precio'];
include 'conexionMYSQL.php';

$insertar= "UPDATE `artículos` SET `SECCIÓN`='$seccion', `NOMBRE ARTÍCULO`='$articulo', `FECHA`='$fecha', `PAÍS DE ORIGEN`='$pais', `PRECIO`='$precio'where SECCIÓN='$seccion'";
$resultados=mysqli_query($conex,$insertar);
if($resultados==false){
	echo "ERROR AL INSERTAR ARTÍCULO"; 
}else

echo "REGISTRO INSERTADO<br><br>";
echo "<table><tr><td>$seccion $articulo $fecha $pais $precio </td></tr></table>";


mysqli_close($conex);

?>