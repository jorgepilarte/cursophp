<style type="text/css">
	.resu{
		color: red;
		font-weight: bold;
	}
</style>

<?php


function calc($op)
{
	if(!strcmp("Suma",$op)){
		global $num1;
		global $num2;
		
		$resul=number_format($num1+$num2,2);
		echo "<p class='resu'>El resultado es: $resul</p>";  
	}

	if(!strcmp("Resta",$op)){
		global $num1;
		global $num2;
		
		$resul=number_format($num1-$num2,2);
		echo "<p class='resu'>El resultado es: $resul</p>";
	}

	if(!strcmp("Multiplicacion",$op)){
		global $num1;
		global $num2;
		
		$resul=number_format($num1*$num2,2);
		echo "<p class='resu'>El resultado es: $resul</p>";
	}

	if(!strcmp("Division",$op)){
		global $num1;
		global $num2;
		
		$resul=number_format($num1/$num2,2);
		echo "<p class='resu'>El resultado es: $resul</p>";
	}

	if(!strcmp("Modulo",$op)){
		global $num1;
		global $num2;
		
		$resul=number_format($num1%$num2,2);
		echo "<p class='resu'>El resultado es: $resul</p>";
	}

	if(!strcmp("Incremento",$op)){
		global $num1;
		
		$num1++;
		
		$resul=number_format($num1,2);
		echo "<p class='resu'>El resultado es: $resul</p>";
	}

	if(!strcmp("Descremento",$op)){
		global $num1;
		//global $num2;

		$num1--;
		
		$resul=number_format($num1,2);
		echo "<p class='resu'>El resultado es: $resul</p>";
	}
}



?>