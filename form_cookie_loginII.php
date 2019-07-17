<h2 align="center">LOGIN USERS</h2>
<form align="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<table align="center">
<tr><td>
	User: <input type="text" name="user">
</td></tr>
<tr><td>
	Pass: <input type="text" name="pass">
</td></tr>
	<tr><td class="left">Recordar</td><td><input type="checkbox" name="recordar"><td></tr>
	<tr><td>
	<input type="submit" name="enviar" value="Login">
	</td>
	</tr>
</table>


</form>