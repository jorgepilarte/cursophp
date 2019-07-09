<?php

if(isset($_COOKIE['idiomaselect'])){
	
if($_COOKIE['idiomaselect']=="es"){
	header("location:cookiepgII.php");

}else if ($_COOKIE['idiomaselect']=="eg") {
	header("location:cookiepgIII.php");
}
}
?>

<p>&nbsp;</p>
<table align="center">
	<tr>
		<td align="center"><img src="cookieportada.png" width="1050" height="400"></td>
	</tr>
	</table><br>
	
<table width="25%" border="0" align="center">
	
	<tr>
		<td colspan="2" align="center"><h2>Elige Idioma</h2></td>
	</tr>

	<tr>
		<td align="center"><a href="cookiecrea.php?idioma=es"><img src="cookiebanderard.png" width="90" height="60"></a></td>
		<td align="center"><a href="cookiecrea.php?idioma=eg"><img src="cookiebanderaus.png" width="90" height="60"></a></td>
	</tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>