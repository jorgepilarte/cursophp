<?php
echo " ACTUALIZAR REGISTRO<br>";
 
echo "<br>";

$busqueda=$_GET['busqueda'];
include 'conexionMYSQL.php';

$consulta= "SELECT * FROM artículos WHERE SECCIÓN='$busqueda'";
$resultados=mysqli_query($conex,$consulta);

while($fila=mysqli_fetch_array($resultados)){



echo "<form action='actualizarregistro.php' method='GET'>";
echo"<label> SECCIÓN</lavel> <input type='text' name='seccion' value='" . $fila["SECCIÓN"] . "'<br>";
echo"<label> NOMBRE</lavel> <input type='text' name='articulo' value='" . $fila["NOMBRE ARTÍCULO"] . "'<br>";
echo"<label> FECHA</lavel> <input type='text' name='fecha' value='" . $fila["FECHA"] . "'<br>";
echo"<label> PAIS</lavel> <input type='text' name='pais' value='" . $fila["PAÍS DE ORIGEN"] . "'<br>";
echo"<label> PRECIO</lavel> <input type='text' name='precio' value='" . $fila["PRECIO"] . "'<br>";
echo "<form><input type='submit' value='Enviar'></form>";

/*echo $fila['SECCIÓN'] . " ";
echo $fila[1] . " ";
echo $fila[2] . " ";
echo $fila[3] . " ";
echo $fila[4] . " ";*/

echo "</form><br>";





}


/*foreach ($fila as $key => $value) {
	echo "$value " . " ";
}*/


mysqli_close($conex);

?>