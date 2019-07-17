<?php 
$user=$_POST['user'];
$pass=$_POST['pass'];

$pascf=password_hash($pass, PASSWORD_DEFAULT, $op=['cost'=>12]);

include 'conPDO.php';

$sql="INSERT INTO login (user, pass) values(:user, :pass)";

$resul=$conexion->prepare($sql);

$resul->execute(array(":user" =>$user, ":pass"=>$pascf));

$resul->closeCursor();

if (isset($_POST['enviar'])) {
	header("location:form_login_passhash.php");
}

?>