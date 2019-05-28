<style type="text/css">
	.h1{
		text-align: center;
		color: blue;
	}

	.f{

		
	}
	.t{
		border: dotted;
		background: green;
</style>

<h1 class="h1">PRACTICA USUARIOS</h1>

<form action="" method="post" class="f">
	
<table class="t" align="center">
	<tr>
		<td>
			USUARIO
		</td>
		<td>
			<input type="text" name="usuario">
		</td>
	</tr>
	<tr>
		<td>
			PASSWORD
		</td>
		<td>
			<input type="text" name="password">
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name="enviar" value="Enviar">
		</td>
	</tr>
</table>
</form>

<?php
if(isset($_POST['enviar'])){

	$usuario=$_POST['usuario'];
	$password=$_POST['password'];

	if($usuario=='jorge' && $password==1234){
		echo "<Logrado";
	}else
	echo "No logrado";
}

?>