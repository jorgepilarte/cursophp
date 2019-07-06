<?php 
include 'pooselect.php';

$producto=new devproductos();

$array=$producto->get_productos();


?>

<?php 
foreach($array as $user){

	echo $user['nombre'] . " ";
	echo $user['user'] . " ";
	echo $user['pass'] . " ";
	echo $user['direcion'] . " ";
	echo $user['telefono'] . " <br>";
}


?>

