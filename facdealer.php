<?php
include ("dealer.php");

$cliente=new Compra();
$clienteJ=new Compra();

Compra::descgov();
$cliente->fact("standar");
$cliente->add("leather");
$cliente->add("aros");

echo $cliente->precio();

$clienteJ->fact("standar");
echo $clienteJ->precio();




?>