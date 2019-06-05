<style type="text/css">
	

</style>

<?php

if(isset($_POST['enviar'])){

	$edad=$_POST['edad'];

	 if($edad<=18){
	 	echo "SOY MENOR DE EDAD";
	 } else if($edad<=30){
	 	echo "SOY MAYOR DE EDAD";
	 }else if($edad<=60){
	 	echo "SOY UNA PERSONA ADULTA";
	 }else{
	 	echo "HASTA OTRA VISITA BYE";
	 }
}




/*video15-16-17*/
?>