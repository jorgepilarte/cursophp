<?php
$nombre=$_GET['nombre'];
$user=$_GET['user'];
$pass=$_GET['pass'];
$direcion=$_GET['direcion'];
$telefono=$_GET['telefono'];


include 'conPDO.php';

$sql= "INSERT INTO usuarios (nombre, user, pass, direcion, telefono) values (:nom, :use, :pass, :dire, :tel)";

$resul=$conexion->prepare($sql);

$resul->execute(array(":nom"=>$nombre, ":use"=>$user, ":pass"=>$pass, ":dire"=>$direcion, ":tel"=>$telefono));

/*while($fila=$resul->fetch(PDO::FETCH_ASSOC)){

	echo $fila['nombre'] . " ";
	echo $fila['user'] . " ";
	echo $fila['pass'] . " ";
	echo $fila['direcion'] . " ";
	echo $fila['telefono'] . " ";
}*/

$resul->closecursor();

?>