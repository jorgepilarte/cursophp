<?php

if(isset($_POST['enviar'])){

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

			//header("location:poomenu.php");
			

		}else{

			//header("location:form_poo_login.php");
			echo "USER INCORRECTO";
		}
	}


?>

<?php
if(!isset($_SESSION['user'])){
include 'form_loginII.php';
}else{
	echo "<a align='right' valign='up' href='cierreloginII.php'<p style='font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;color: #CC6600;'> Hola " . $_SESSION['user'] . "</p></a>";
}
?>

<h1 align="center">MENU USER</h1>

<a href="poomenuI.php"><h3> Sub-Menu</a></h3><br>

<a href="poomenuII.php"><h3> Sub-Menu</a></h3><br>

<a href="poomenuIII.php"><h3> Sub-Menu</a></h3><br>
