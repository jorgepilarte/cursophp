<?php
include 'conPDO.php';

$sql="SELECT * FROM VENTALOT";
$resul=$conexion->query($sql);
$reg=$resul->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST['insertar'])){

	$user=$_POST['users'];
	$venta=$_POST['ventas'];
	$premio=$_POST['premios'];
	$recarga=$_POST['recargas'];
	$fecha=$_POST['fechas'];



	$sql="INSERT INTO VENTALOT (user, venta, premio, recarga, fecha) VALUES(:user, :venta, :premio, :recarga, :fecha)";
	$resul=$conexion->prepare($sql);

	$resul->execute(array(":user"=>$user, ":venta"=>$venta, ":premio"=>$premio, ":recarga"=>$recarga, ":fecha"=>$fecha));

	header("location:crup.php");
}

?>

<h2 align="center">ENTRA DE REGISTRO</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<tr><td><input type="submit" name="insertar" value="Insertar"></td>
	<td><input type="reset" name="" value="Eliminar"></td>
	<td><input type="button" name="" value="Salir"></td>
</tr>

<table border="line">
<tr>
	<td><input type="text" name="users"></td>
	<td><input type="text" name="ventas"></td>
	<td><input type="text" name="premios"></td>
	<td><input type="text" name="recargas"></td>
	<td><input type="date" name="fechas"></td>
</tr>

<tr align="center" style="font-size: 20px">
		<td>Usuario</td><td>Venta</td><td>Premio</td><td>Recarga</td><td>Fecha</td>
</tr>
<?php foreach ($reg as $value):?>

<tr align="center">
	<td><a href="actualizareliminar.php?id=<?php echo $value->id ?> & user=<?php echo $value->user ?> & venta=<?php echo $value->venta ?> & premio=<?php echo $value->premio ?> & recarga=<?php echo $value->recarga ?> & fecha=<?php echo $value->fecha ?>"><?php echo $value->user ?></a></td>
	<td><?php echo $value->venta ?></td>
	<td><?php echo $value->premio?></td>
	<td><?php echo $value->recarga?></td>
	<td><?php echo $value->fecha?></td>
</tr>
<?php endforeach; ?>

</table>
</form>

