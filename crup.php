<?php
include 'conPDO.php';

$sql="SELECT * FROM VENTALOT";
$resul=$conexion->query($sql);
$reg=$resul->fetchAll(PDO::FETCH_OBJ);

?>

<h2 align="center">ENTRA DE REGISTRO</h2>
<tr><td><input type="submit" name="" value="Insertar"></td>
	<td><input type="submit" name="" value="Eliminar"></td>
	<td><input type="submit" name="" value="Actualizar"></td>
</tr>

<table border="line">
<tr>
	<td><input type="text" name=""></td>
	<td><input type="text" name=""></td>
	<td><input type="text" name=""></td>
	<td><input type="text" name=""></td>
	<td><input type="text" name=""></td>
</tr>

<tr align="center" style="font-size: 20px">
		<td>Usuario</td><td>Venta</td><td>Premio</td><td>Recarga</td><td>Fecha</td>
</tr>
<?php foreach ($reg as $value):?>

<tr align="center">
	<td><a href="actualizareliminar.php?id=<?php echo $value->id ?>"><?php echo $value->user ?></a></td>
	<td><?php echo $value->venta ?></td>
	<td><?php echo $value->premio?></td>
	<td><?php echo $value->recarga?></td>
	<td><?php echo $value->fecha?></td>
</tr>
<?php endforeach; ?>




</table>