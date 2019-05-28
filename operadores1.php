
<style>
	
	

	.h1{
		
		font-style: bold;
		font-size: 30px;
		text-align: center;
		color: #FF0000;
	}

	.table{
		
		background-color: #d8da3d;
		border: double;
	}


</style>
<h1 class="h1"> ENTRADA DE USUARIO</h1>

<form action="" method="post" name="usuario" id="usuario">
	<table class="table" width="15&" align="center">
		<tr>
			<td>Nombre:</td>
			<td>
				<lavel for="usuario"> </lavel>
				<input type="text" name="Usuario" id="Usuario">
			</td>
		</tr>
		<tr>
			<td>Edad:</td>
			<td>
				<lavel for="Edad"> </lavel>
				<input type="text" name="Edad" id="edad">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="enviar" id="Enviar" value="Enviar">
				
			</td>
		</tr>
		
	</table>
	
</form>

<?php
$usuario="jorge";
$edad=34;

if(isset($_POST['enviar'])){

	$usuario=$_POST['Usuario'];



	if ($usuario=='jorge') {
		echo "Bienvenido, puede entrar";
	}else{
		echo "No puede entar nombre incorrecto";
}
	
}



?>
