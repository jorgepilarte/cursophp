

<?php

 
$user=$_GET['user'];
$pass=$_GET['pass'];
include 'conexionMYSQL.php';

$consulta= "SELECT * FROM usuarios WHERE user='$user' and pass='$pass'"; // eje: deporte' or '1'='1 para inyectar informacion
$resultados=mysqli_query($conex,$consulta);

while($fila=mysqli_fetch_array($resultados)){



echo "<form action='actualizarregistro.php' method='GET'>";
echo"<label> NOMBRE</lavel> <input type='text' name='user' value='" . $fila["nombre"] . "'<br>";
echo"<label> USER</lavel> <input type='text' name='pass' value='" . $fila["user"] . "'<br>";
echo"<label> PASS</lavel> <input type='text' name='fecha' value='" . $fila["pass"] . "'<br>";
echo"<label> DIRECION</lavel> <input type='text' name='pais' value='" . $fila["direcion"] . "'<br>";
echo"<label> TELEFONO</lavel> <input type='text' name='precio' value='" . $fila["telefono"] . "'<br>";
//echo "<form><input type='submit' value='Enviar'></form>";

/*echo $fila['SECCIÓN'] . " ";
echo $fila[1] . " ";
echo $fila[2] . " ";
echo $fila[3] . " ";
echo $fila[4] . " ";*/

echo "</form><br>";

}

mysqli_close($conex);
?>