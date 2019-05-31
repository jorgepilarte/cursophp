<hi>Practica</hi>
<form action="" method="post">
<input type="text" name="num1">
<input type="text" name="num2">
<select name="oper"for="oper">
	<option>Suma</option>
</select>
<input type="submit" name="enviar">
	
</form>
<?php
if(isset($_POST['enviar'])){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$oper=$_POST['oper'];

	if(!strcmp("Suma",$oper)){
		$resul=($num1+$num2);
		echo "Resulda es $resul";
	}
}

/* video 10 practica ralizada*/
?>