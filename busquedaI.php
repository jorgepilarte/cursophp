<?php
function consulta(){

$busqueda=$_POST['busqueda'];
include 'conexionMYSQL.php';

$consulta= "SELECT * FROM datospersonales WHERE NOMBRE='%busqueda'";
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
if(isset($_POST['buscar']=true)){

	consulta();
}else{
	echo("<form method='POST'><label>Buscar<input type='text' name='buscar'></label><input type='submit' name='enviar' value='Buscar'</form>");
}


?>
