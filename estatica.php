<?php
function incrementa(){

	static $conteo=0;

	$conteo++;

	echo "$conteo<br>";

}

incrementa();
incrementa();
incrementa();
incrementa();

/* video7 aqui entendemos que para que pueda incrementar la varaible conteo hay que ponerle static si no se se muesta solo un valor repedido*/


?>