<?php
$busqueda=$_GET['busqueda'];
include 'conexionMYSQL.php';

$consulta= "SELECT * FROM datospersonales WHERE NOMBRE='$busqueda'";
$resultados=mysqli_query($conex,$consulta);

while($fila=mysqli_fetch_row($resultados)){
echo $fila[0] . " ";
echo $fila[1] . " ";
echo $fila[2] . " ";
echo $fila[3] . " ";

echo "<br>";
}

/*foreach ($fila as $key => $value) {
	echo "$value " . " ";
}*/


mysqli_close($conex);

?>