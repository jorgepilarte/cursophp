<?php
include 'pooconexion.php';

class Login extends conexion{

	public function login(){

		parent::__construct();

	}

	public function get_login(){

		$resul=$this->conexiondb->query("SELECT * FROM login where user= :use and pass= :pas");
		

		$rep=$resul->fetch_All(MYSQLI_ASSOC);
		

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



		return $rep;
	}
}
?>
