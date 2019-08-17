<?php
include ("modelo/ventalot_modelo.php");

$vtalot=new Ventalot_modelo();

$reg=$vtalot->get_ventalot();


include ("vista/ventalot_vista.php");

 ?>