<?php

if(isset($_POST['enviar'])){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$oper=$_POST['oper'];

calc($oper);

}

function calc($op)
{
	if(!strcmp("Suma",$op)){
		global $num1;
		global $num2;
		
		$resul=number_format($num1+$num2,2);
		echo "El resultado es: $resul";  
	}

	if(!strcmp("Resta",$op)){
		global $num1;
		global $num2;
		
		$resul=number_format($num1-$num2,2);
		echo "El resultado es: $resul";
	}

	if(!strcmp("Multiplicacion",$op)){
		global $num1;
		global $num2;
		
		$resul=number_format($num1*$num2,2);
		echo "El resultado es: $resul";
	}

	if(!strcmp("Division",$op)){
		global $num1;
		global $num2;
		
		$resul=number_format($num1/$num2,2);
		echo "El resultado es: $resul";
	}

	if(!strcmp("Modulo",$op)){
		global $num1;
		global $num2;
		
		$resul=number_format($num1%$num2,2);
		echo "El resultado es: $resul";
	}
}



?>