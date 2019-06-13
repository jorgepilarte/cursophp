<?php
$alimentos=array("fruta"=>array("tropical"=>"kiwi",
								"citritico"=>"manadarina",
								"otro"=>"manzans"),


				"leche"=>array("vacuno"=>"red",
								"ovino"=>"chiva",
								"otro"=>"almendra"),


				"carne"=>array("vacuno"=>"rabo",
								"cerdo"=>"pierna",
								"cerdo"=>"chuleta",
								"otros"=>"costilla"));


foreach ($alimentos as $clave_alim => $alim) {
	echo "$clave_alim <br>";
	while (list($diverso, $diversoI)=each($alim)) {
		echo "$diverso=$diversoI <br>";
	}
	echo "<br>";
}



?>