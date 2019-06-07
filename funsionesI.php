<?php
function test ($var,$var1){ // funsiones propia

	$var++;
	$var1++;

	$resul=$var+$var1;

	return $resul;
}

//$var=5

// echo $var;

echo (test(5,7)) . "<br>";

$word="Jorge pilarte";  //funsiones predefinieda

echo(strtolower($word)) . "<br>";

echo(strtoupper($word)) . "<br>";

function frase($frase,$verofal){

	if($verofal==true){
		$frase=strtolower($frase);
	}else{
		$frase=strtoupper($frase);
	}

	return $frase;
}
echo (frase("jorge esta prueba de lo aprendido", false))

/* video20*/

?>