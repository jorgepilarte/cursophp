<?php
session_start();
if(!isset($_SESSION['user'])){
header("location:form_poo_login.php");
}

?>
<?php

echo "<a align='right' valign='up' href='poocerraruse.php'<p style='font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;color: #CC6600;'> Hola " . $_SESSION['user'] . "</p></a>";

//<a href='form_poo_login.php'</a> para direcionar 
?>

<h1 align="center">MENU USER</h1>
