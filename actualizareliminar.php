<?php
// pertenece al video CRUP
if(!isset($_POST['actualizar'])){
$id=$_GET['id'];
$user=$_GET['user'];
$venta=$_GET['venta'];
$premio=$_GET['premio'];
$recarga=$_GET['recarga'];
$fecha=$_GET['fecha'];
}else{
$id=$_POST['id'];
$user=$_POST['user'];
$venta=$_POST['venta'];
$premio=$_POST['premio'];
$recarga=$_POST['recarga'];
$fecha=$_POST['fecha'];


include 'conPDO.php';

$sql="UPDATE VENTALOT SET USER=:user, VENTA=:venta, PREMIO=:premio, RECARGA=:recarga, FECHA=:fecha WHERE ID=:id";

$resul=$conexion->prepare($sql);

$resul->execute(array(":id"=>$id, ":user"=>$user, "venta"=>$venta, ":premio"=>$premio, ":recarga"=>$recarga, ":fecha"=>$fecha));


header("location:crup.php");

}
 ?>


<form name="forms" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table border="line">

	
 <tr>

	<td><input type="hidden" name="id" id="t0" onkeyup="saltar(event,'t1')" value="<?php echo $id; ?>"></td>
 	<td><input type="text" name="user" id="t1" onkeyup="saltar(event,'t2')" value="<?php echo $user; ?>"></td>
	<td><input type="text" name="venta" id="t2" onkeyup="saltar(event,'t3')" value="<?php echo $venta; ?>"></td>
	<td><input type="text" name="premio" id="t3" onkeyup="saltar(event,'t4')" value="<?php echo $premio; ?>"></td>
	<td><input type="text" name="recarga" id="t4" onkeyup="saltar(event,'t5')" value="<?php echo $recarga; ?>"></td>
	<td><input type="text" name="fecha" id="t5" onkeyup="saltar(event,'submit')" value="<?php echo $fecha; ?>"></td>
	
</tr>


<tr>
	<td><input type="submit" name="actualizar" id="submit" value="Actualizar"></td>

	<td><a href="eliminaractualizarcrup.php?id=<?php echo $id ?>>"><input type="button" name="" id="submit" value="Eliminar"></a></td>
</tr>
</table>
</form>



<script>
// Funcion que se ejecuta cada vez que se pulsa una tecla en cualquier input
// Tiene que recibir el "event" (evento generado) y el siguiente id donde poner
// el foco. Si ese id es "submit" se envia el formulario
function saltar(e,id)
{
	// Obtenemos la tecla pulsada
	(e.keyCode)?k=e.keyCode:k=e.which;
 
	// Si la tecla pulsada es enter (codigo ascii 13)
	if(k==13)
	{
		// Si la variable id contiene "submit" enviamos el formulario
		if(id=="submit")
		{
			document.forms[0].submit();
		}else{
			// nos posicionamos en el siguiente input
			document.getElementById(id).focus();
		}
	}
}
</script>