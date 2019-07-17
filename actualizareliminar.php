<?php
// pertenece al video CRUP
$id=$_GET['id'];
include 'conPDO.php';

$reg=$conexion->query("SELECT * FROM VENTALOT WHERE ID='$id'")->fetchAll(PDO::FETCH_OBJ);
 ?>
<table border="line">

	<?php foreach ($reg as $value):?>
 <tr>
	

	<td><input type="text" name="" value="<?php echo $value->user?>"></td>
	<td><input type="text" name="" value="<?php echo $value->venta?>"></td>
	<td><input type="text" name="" value="<?php echo $value->premio?>"></td>
	<td><input type="text" name="" value="<?php echo $value->recarga?>"></td>
	
</tr>
<?php endforeach ?>

<tr>
	<td><input type="submit" name="" value="Actualizar"></td>
	<td><a href="eliminaractualizarcrup.php?id=<?php echo $value->id ?>>"><input type="submit" name="" value="Eliminar"></a></td>
</tr>
</table>