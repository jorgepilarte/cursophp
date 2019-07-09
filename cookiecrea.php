<?php

setcookie("idiomaselect", $_GET["idioma"], time()+86400);

header("location:cookieleeridioma.php");


?>