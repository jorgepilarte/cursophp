<?php
include ("dealer.php");

$cliente=new Compra();

Compra::descgov();
$cliente->fact("standar");
$cliente->add("leather");
$cliente->add("aros");

echo $cliente->precio();




?>