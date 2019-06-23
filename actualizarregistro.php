<?php
$seccion=$_GET['seccion'];
$articulo=$_GET['articulo'];
$fecha=$_GET['fecha'];
$pais=$_GET['pais'];
$precio=$_GET['precio'];
include 'conexionMYSQL.php';

//$insertar= "UPDATE artículos SET SECCIÓN='$seccion', NOMBRE ARTÍCULO='$articulo', FECHA='$fecha', PAÍS DE ORIGEN='$pais', PRECIO=$precio where SECCIÓN='$seccion'";


//$inser="UPDATE `artículos` SET `SECCIÓN`=$seccion,`NOMBRE ARTÍCULO`=$articulo,`FECHA`=$fecha,`PAÍS DE ORIGEN`=$pais,`PRECIO`=$precio WHERE SECCIÓN='$seccion' ";

$inser="UPDATE `artículos` SET `SECCIÓN`='$seccion',`NOMBRE ARTÍCULO`='$articulo',`FECHA`='$fecha',`PAÍS DE ORIGEN`='$pais',`PRECIO`=$precio WHERE `SECCIÓN`='$seccion'";
$resultados=mysqli_query($conex,$inser);
if($resultados==false){
	echo "ERROR AL ACTUALIZAR ARTÍCULO"; 
}else

echo "REGISTRO ACTUALIZADO<br><br>";
echo "<table><tr><td>$seccion $articulo $fecha $pais $precio </td></tr></table>";


mysqli_close($conex);

?>