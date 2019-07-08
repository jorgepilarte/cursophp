<?php

if(isset($_COOKIE['test'])){
echo $_COOKIE['test'];
}else{
	echo "la cookie no se ha cargado";
}
?>