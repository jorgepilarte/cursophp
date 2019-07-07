<?php
include 'poologinselect.php';

$login=new login();

$arraylogin=$login->get_login();



?>

<?php
foreach($arraylogin as $user){

	//echo $user['id'] . " ";
	echo $user['user'] . " ";
	echo $user['pass'] . " ";
	
	echo $user['fecha'] . " <br>";
}


?>


