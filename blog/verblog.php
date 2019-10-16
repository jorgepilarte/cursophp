<a href="formblog.php"> Ir al form</a><br/>
<?php
include 'conectar.php';

$sql="SELECT * FROM blog ORDER BY fecha DESC";

if($resul=mysqli_query($conexion, $sql)){

	while($fila=mysqli_fetch_assoc($resul)) {
		
		echo "<h2>" . $fila["titulo"] . "</h2>";

		echo "<h3>" . $fila["fecha"] . "</h3>";

		echo "<div style='width:400px'>" . $fila['contenido'] . "</div><br/>";
		if($fila['imagen']!=""){

			echo "<img src='imagenes/" . $fila['imagen'] . "' width='300px'/>";
		}
		echo "<hr/>";
	}
}

?>