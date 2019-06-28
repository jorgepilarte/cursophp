<?php
$user=$_GET['user'];

include 'conexionMYSQL.php';

$sql= "SELECT * FROM usuarios where nombre=?";

$resul= mysqli_prepare($conex, $sql);

$cons= mysqli_stmt_bind_param($resul, "s", $user);

$cons= mysqli_stmt_execute($resul);

if($cons==false){
	echo "error en la consulta";
}else{
	echo "informacion<br>";
	$cons=mysqli_stmt_bind_result($resul, $v1, $v2, $v3, $v4, $v5);

	while(mysqli_stmt_fetch($resul)){

		echo $v1 . " " . $v2 . " " . $v3 . " " . $v4 .  "<br>";
	}

	mysqli_stmt_close($resul);
}


?>