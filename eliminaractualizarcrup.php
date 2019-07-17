<?php
// pertenece al video CRUP
$id=$_GET['id'];
include 'conPDO.php';

$conexion->query("DELETE  FROM VENTALOT WHERE ID='$id'");

header("location:crup.php")
 ?>