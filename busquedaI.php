<?php
function eje_consulta($busqueda){

//$busqueda=$_POST['buscar'];
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
}

?>
<?php
$mipag=$_SERVER["PHP_SELF"];
$misbus=$_GET["buscar"];


//if(isset($misbus)){
if($misbus!=null){

	eje_consulta($misbus);
}else{
	echo ("<form action='" . $mipag . "' method='get'><label>Buscar<input type='text' name='buscar'></label><input type='submit' name='enviar' value='Buscar'</form>");

}

?>
