<?php
include 'conexionMYSQL.php';

$consulta= "SELECT * FROM datospersonales";
$resultados=mysqli_query($conex,$consulta);
$fila=mysqli_fetch_row($resultados);

echo $fila[0];


?>