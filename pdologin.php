<?php
include 'conPDO.php';

$sql="SELECT * FROM login WHERE user=:use AND pass=:pas";

$rep=$conexion->prepare($sql);

		$user=htmlentities(addslashes($_POST['user']));
		$pass=htmlentities(addslashes($_POST['pass']));

		$rep->bindvalue(":use", $user);
		$rep->bindvalue(":pas", $pass);

		$rep->execute();

		$nfila=$rep->rowCount();

		if($nfila!=0){

			session_start();
			$_SESSION['user']=$_POST['user'];

			header("location:poomenu.php");

		}else{

			header("location:form_poo_login.php");
		}





/*$stmt = $conexion->prepare("SELECT * FROM login WHERE user=:use AND pass=:pas");
    $stmt->bindValue(":use", $user, PDO::PARAM_STR);
    $stmt->bindValue(":pas", $pass, PDO::PARAM_STR);
    $stmt->execute();

    $nfila=$stmt->rowCount();

		if($nfila!=0){

			echo "funciona!!";

		}else{

			header("location:form_poo_login.php");
		}*/


?>