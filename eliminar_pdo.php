<?php
$nombre=$_GET['nombre'];





include 'conPDO.php';

$sql= "DELETE FROM usuarios WHERE nombre = :nom";

$resul=$conexion->prepare($sql);

$resul->execute(array(":nom"=>$nombre));

if ($resul==true){
	echo "REGISTRO ELIMINADO";
}else{
	echo "REGISTRO NO ELIMINA";
}

/*while($fila=$resul->fetch(PDO::FETCH_ASSOC)){

	echo $fila['nombre'] . " ";
	echo $fila['user'] . " ";
	echo $fila['pass'] . " ";
	echo $fila['direcion'] . " ";
	echo $fila['telefono'] . " ";
}*/

$resul->closecursor();

?>