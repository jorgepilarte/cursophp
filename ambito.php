<?php

$nombre="Jorge";

function dame(){
	global $nombre;
	$nombre="Maria " . $nombre;
}

dame();

echo "$nombre";
/* video6, nos explica que la variable nombre solo y la variable que esta dentro de la funsion que su valor sea Maria cunado se ejectua tampoco sale solo sale el valor de la variable que esta fuera valor Jorge. Dentro de la funsion hay que ponerle Global y cambiarle valor dentro de la funcion para cuando la llame la funsion se pueda ejecutar y si pongo global dentro de la funsion y no concateno con la valira de fuera sola sale la que esta dentro de la funsion*/
?>