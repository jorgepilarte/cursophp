<?php

$aute=false;

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

			$aute=true;

			if(isset($_POST['recordar'])){

				setcookie('user', $_POST['user'], time()+86400);
			}

			//header("location:poomenu.php");
			

		}else{

			//header("location:form_poo_login.php");
			echo "USER INCORRECTO";
		}
	}


?>

<?php
if($aute==false){
	if(isset($_COOKIE['user'])){

		include 'form_cookie_loginII.php';
	}

}

if($aute==true || !isset($_COOKIE['user'])){
	
		
		echo "<a align='right' valign='up' href='poocerraruse.php'<p style='font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;color: #CC6600;'> User " . $_COOKIE['user'] . "</p></a>";
	}


?>

<h1 align="center">MENU USER</h1>

<a href="poomenuI.php"><h3> Sub-Menu</a></h3><br>

<a href="poomenuII.php"><h3> Sub-Menu</a></h3><br>

<a href="poomenuIII.php"><h3> Sub-Menu</a></h3><br>

<?php
if($aute==true || !isset($_COOKIE['user'])){
	
		include 'contcookieloginII.php';
	}



?>