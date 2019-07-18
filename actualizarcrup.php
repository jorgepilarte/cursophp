<?php /*
$id=$_POST['id'];
$venta=$_POST['venta'];
$user=$_POST['user'];

$premio=$_POST['premio'];
$recarga=$_POST['recarga'];

//echo $id . $user . $venta . $venta . $premio . $recarga;


include 'conPDO.php';

$sql="UPDATE VENTALOT SET USER=:user, VENTA=:venta, PREMIO=:premio, RECARGA=:recarga WHERE ID=:id";

$resul=$conexion->prepare($sql);

$resul->execute(array(":id"=>$id, ":user"=>$user, "venta"=>$venta, ":premio"=>$premio, ":recarga"=>$recarga));

header("location:crup.php");*/
 ?>