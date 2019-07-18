<?php
// pertenece al video CRUP
if(!isset($_POST['actualizar'])){
$id=$_GET['id'];
$user=$_GET['user'];
$venta=$_GET['venta'];
$premio=$_GET['premio'];
$recarga=$_GET['recarga'];
}else{
$id=$_POST['id'];
$user=$_POST['user'];
$venta=$_POST['venta'];
$premio=$_POST['premio'];
$recarga=$_POST['recarga'];

}

include 'conPDO.php';

$sql="UPDATE VENTALOT SET USER=:user, VENTA=:venta, PREMIO=:premio, RECARGA=:recarga WHERE ID=:id";

$resul=$conexion->prepare($sql);

$resul->execute(array(":id"=>$id, ":user"=>$user, "venta"=>$venta, ":premio"=>$premio, ":recarga"=>$recarga));

//header("location:crup.php");

//echo $id . $user . $venta . $premio . $recarga;

//include 'conPDO.php';

//$reg=$conexion->query("SELECT * FROM VENTALOT WHERE ID='$id'")->fetchAll(PDO::FETCH_OBJ);
 ?>

 <?php //foreach ($reg as $value):?>
<form name="forms" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table border="line">

	
 <tr>
	
 	<td><input type="hidden" name="" id="" onkeyup="saltar(event,'t2')" value="<?php echo $id?>"></td>
	<td><input type="text" name="" id="t1" onkeyup="saltar(event,'t2')" value="<?php echo $user?>"></td>
	<td><input type="text" name="" id="t2" onkeyup="saltar(event,'t3')" value="<?php echo $venta?>"></td>
	<td><input type="text" name="" id="t3" onkeyup="saltar(event,'t4')" value="<?php echo $premio?>"></td>
	<td><input type="text" name="" id="t4" onkeyup="saltar(event,'submit')" value="<?php echo $recarga?>"></td>
	
</tr>
<?php //endforeach ?>

<tr>
	<td><a href="#"><input type="submit" name="actualizar" id="submit" value="Actualizar"></a></td>

	<td><a href="eliminaractualizarcrup.php?id=<?php echo $value->id ?>>"><input type="submit" name="" id="submit" value="Eliminar"></a></td>
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