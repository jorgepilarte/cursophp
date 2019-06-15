<?php
include 'conexionMYSQL.php';

$consulta= "SELECT * FROM datospersonales";
$resultados=mysqli_query($conex,$consulta);
$fila=mysqli_fetch($resultados);

echo $fila[0];


?>