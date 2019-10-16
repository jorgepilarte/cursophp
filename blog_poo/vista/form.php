<form action="../controlador/transacion.php" method="post" enctype="multipart/Form-data">
	<table>
		<tr>
			<td>Titulo</td>
			<td><input type="text" name="titulo"></td>
		</tr>
		<tr>
			<td>Comentarios</td>
			<td><textarea name="comentarios" maxlength="" cols="50" rows="10"></textarea></td>
		</tr>
		<input type="hidden" name="MAX_Tam" value="2097152">
		<tr>
			<td><input type="file"" name="imagen" id="Examinar"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="enviar" value="Enviar"></td>
		</tr>
	</table>
	
</form>

<a href="verblog.php" align='center'> Ir al blog</a><br/><br/>