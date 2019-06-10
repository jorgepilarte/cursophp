<?php
include ("dealer.php");

$cliente=new Compra();

$cliente->Compra("sport");

echo $cliente->precio();

?>