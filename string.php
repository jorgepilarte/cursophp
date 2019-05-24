<style>
	
.negrita{
	color: #FF0000;
	text-align: center;
}



</style>

<?php

echo "<p class='negrita'> HOLA ESTE ES EL MESAJE DE PRUEBA</p>";

$variable="Jorge";

echo "Este es el nombre: $variable<br>";

$ej1="jorge";
$ej2="JORGE";

$resultado=strcasecmp($ej1, $ej2); // strcmp espara comprar valores
$resultado1=strcmp($ej1, $ej2); // si no ponemos $!resultado no invierte la logica, si era verdadero, sera falso


echo "El resultado es: $resultado<br>";

if ($resultado) {
	echo "No coniciden<br>";
}else{
	echo "Si coniciden<br>";
}

if ($resultado1) {
	echo "No coniciden<br>";
}else{
	echo "Si coniciden<br>";
}


/* video8, string ejemplo usando el string que debemos tener en cuenta la comilla simple, tambien usamos strcmp para comparar y luego mostramos en pantalla el resultado usando el if.*/
?>