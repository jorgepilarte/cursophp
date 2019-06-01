<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Calculo Matematico</p>
<form name="formcalc" method="post" action="">
	<table>
		<tr>
		<td>
		<label for="num1"></label>
		<input type="text" name="num1" id="num1">
		</td>
		</tr>
		<tr>
		<td>
		<label for="num2"></label>
		<input type="text" name="num2" id="num2">
		</td>
		</tr>
		<tr>
		<td>
		<label for="oper"></label>
		<select name="oper" id="oper">
		<option>Suma</option>
		<option>Resta</option>
		<option>Multiplicacion</option>
		<option>Division</option>
		<option>Modulo</option>
		<option>Incremento</option>
		<option>Descremento</option>
		</select>
		</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="enviar" id="enviar" value="Calcular" onclick="test">
			</td>
		</tr>
	</table>
	
</form>

<?php
	include("calculo.php");

	if(isset($_POST['enviar'])){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$oper=$_POST['oper'];

calc($oper);

}

/* video13 */
?>



