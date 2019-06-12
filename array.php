<?php
$datos=array('Juan','Jorge','Pedro','Maria');

	echo $datos[1] . "<br>";
	echo $datos[2] . "<br>";

$valor=array("Nombre"=>"Jorge","Apellido"=>"Pilarte","Edad"=>21);
$valor["Pais"]="Dominican";// para agregar al array
echo $valor["Nombre"] .  $valor["Apellido"] . "<br>";

//$valor="Luis";

if(is_array($valor)){
	echo "ES UNA ARRAY <br>";
}else{
	echo "NO ES UN ARRAY<br>";
}

foreach($valor as $val=>$va){
	echo " $val  $va ";

}

echo "<br>";

$sem[]= "lunes";
$sem[]= "martes";
$sem[]= "miercoles";
$sem[]= "jueves";
$sem[]= "viernes";

for ($i=0; $i<count($sem) ; $i++) { 
	echo "$sem[$i] <br>";
}
echo "<br>";
$empleados=array("Rosa","Maria","Aura","Juana");

echo $empleados[rand(0,4)] . "<br>";

echo "<br>";

for($i=0;$i<count($empleados);$i++){
	echo "$empleados[$i] <br>";

	
	
}



?>
<?php

//Método con rand()
/*function generateRandomString($length = 4) {
    $characters = array("Rosa","Maria","Aura","Juana");
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength -1)];
    }
    return $randomString;
} 

echo generateRandomString();
*/
?>