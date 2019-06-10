<?php
include 'poocod.php';

$renault=new Coche();
$mazda=new Coche();
$seat=new Coche();
$mack=new Camion();

$seat->girar();

echo $seat->ruedas . "<br>";

$seat->color("red","seat");

$mack->girar();


/*vedo21- */
?>