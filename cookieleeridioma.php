<?php

if(!$_COOKIE['idiomaselect']){
	header("location:cookiepgI.php");

}else if($_COOKIE['idiomaselect']=="es"){
	header("location:cookiepgII.php");

}else if ($_COOKIE['idiomaselect']=="eg") {
	header("location:cookiepgIII.php");
}
?>