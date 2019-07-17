<?php

$user=htmlentities(addslashes($_POST['user']));
$pass=htmlentities(addslashes($_POST['pass']));
$contador=0;

include 'conPDO.php';

$sql="SELECT * FROM LOGIN WHERE USER=:user";
$resul=$conexion->prepare($sql);
$resul->execute(array(":user"=>$user));

	while($registro=$resul->fetch(PDO::FETCH_ASSOC)){
		if(password_verify($pass, $registro['pass'])){

			$contador++;
		}

		if($contador>0){

			
			echo "USER " . $user . " EXISTE";
		}else{
			echo "USER  " . $user . " NO EXISTE";
		}
	}
	


	$resul->closeCursor();

?>