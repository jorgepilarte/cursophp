<?php
if(isset($_POST['enviar'])){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$oper=$_POST['oper'];
	
test($oper);

}

function test($op){

	if(!strcmp("Suma",$op)){
		global $num1;
		global $num2;
		$resul=($num1+$num2);
		echo "Resulda es $resul";
	}
}

/* video 10 practica ralizada*/
?>