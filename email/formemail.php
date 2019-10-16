<form name="enviaremail" action="enviaremail.php" method="post">
	<table>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="destinatario" maxlength="50"></td>
		</tr>
		<tr>
			<td>Asunto :</td>
			<td><input type="text" name="asunto" maxlength="50"></td>
		</tr>
		<tr>
			<td>Mensaje :</td>
			<td>
			<textarea name="comentario" maxlength="500" cols="30" rows="5"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="enviar" value="Enviar" maxlength="50"></td>
		</tr>


	</table>
	

</form>