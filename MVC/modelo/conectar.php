<?php
class Conectar{

	public static function conexion(){

		try{
	$conexion= new PDO("mysql:host=localhost; dbname=cursophp", "root", "");

	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$conexion->exec("set character set utf8");
	
}catch(Exception $e){

	die("Error: " . $e->GetMessage());

	echo $conexion->Getline();

}finally{

	$base=null;
}

return $conexion;
	}
}

?>