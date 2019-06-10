<?php
include 'poocod.php';

$renault=new Coche();
$mazda=new Coche();
$seat=new Coche();
$mack=new Camion();

$seat->girar();
echo $mack->get_ruedas() . "<br>";
echo $seat->get_ruedas() . "<br>";
echo $seat->get_motor() . " CC" . " <br>";

//$seat->color("red","seat");

//$mack->arrancar();

//$mack->color("BLANCO","MACK");
//echo $mack->ruedas . "<br>";


/*vedo21- */
?>