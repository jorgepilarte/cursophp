<style type="text/css">
	

</style>

<?php

if(isset($_POST['enviar'])){

	$pass=$_POST['pass'];
	$nombre=$_POST['nombre'];

	switch (true) {
		case $pass==1234 && $nombre=="Jorge":
			echo "Puedes entrar";
			break;
		
		default:
			echo "No puede entrar";
			break;
	}

	/*echo $pass==9876 && $nombre=="Jorge"? "PUEDES ENTRAR": "NO PUEDES ENTRAR"; // es otr foma de poner la condicion llamado operar ternario
	*/


	/*

	 if($edad<=18){
	 	echo "SOY MENOR DE EDAD";
	 } else if($edad<=30){
	 	echo "SOY MAYOR DE EDAD";
	 }else if($edad<=60){
	 	echo "SOY UNA PERSONA ADULTA";
	 }else{
	 	echo "HASTA OTRA VISITA BYE";
	 }
	 */
}




/*video15-16-17 en estos video se ponen los diferente manera de condionales*/
?>