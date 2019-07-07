<h2>DESGLOSE DE EFECTIVO<h2>
	

<form name="form" method="post" action="">

	<script>
            function obtenerSuma()
            {
                document.getElementById('resultado').value=parseFloat(document.getElementById('1').value)+parseFloat(document.getElementById('2').value)+parseFloat(document.getElementById('3').value)+parseFloat(document.getElementById('4').value)+parseFloat(document.getElementById('5').value)+parseFloat(document.getElementById('6').value)+parseFloat(document.getElementById('7').value)+parseFloat(document.getElementById('8').value)+parseFloat(document.getElementById('9').value)+parseFloat(document.getElementById('10').value)+parseFloat(document.getElementById('11').value);
            }
        </script> 
	 
	<input onkeyup="this.form.text11.value = parseInt(this.value)*2000" name="text" type="text" size="4" maxlength="8"><label>RD$2000</label><input type="text" name="text11" size="10" maxlength="10" id="11" onkeyup="obtenerSuma();" readonly="" value=""><br>

	<input onkeyup="this.form.text10.value = parseInt(this.value)*1000" name="text" type="text" size="4" maxlength="8"><label>RD$1000</label><input type="text" name="text10" size="10" maxlength="10" id="10" onkeyup="obtenerSuma();" readonly="" value=""><br>

	<input onkeyup="this.form.text9.value = parseInt(this.value)*500" name="text" type="text" size="4" maxlength="8"><label>RD$500</label><input type="text" name="text9" size="10" maxlength="10" id="9" onkeyup="obtenerSuma();" readonly="" value=""><br>

	<input onkeyup="this.form.text8.value = parseInt(this.value)*200" name="text" type="text" size="4" maxlength="8"><label>RD$200</label><input type="text" name="text8" size="10" maxlength="10" id="8" onkeyup="obtenerSuma();" readonly="" value=""><br>

	<input onkeyup="this.form.text7.value = parseInt(this.value)*100" name="text" type="text" size="4" maxlength="8"><label>RD$100</label><input type="text" name="text7" size="10" maxlength="10" id="7" onkeyup="obtenerSuma();" readonly="" value=""><br>

	<input onkeyup="this.form.text6.value = parseInt(this.value)*50" name="text" type="text" size="4" maxlength="8"><label>RD$50</label><input type="text" name="text6" size="10" maxlength="10" id="6" onkeyup="obtenerSuma();" readonly="" value=""><br>

	<input onkeyup="this.form.text5.value = parseInt(this.value)*25" name="text" type="text" size="4" maxlength="8"><label>RD$25</label><input type="text" name="text5" size="10" maxlength="10" id="5" onkeyup="obtenerSuma();" readonly="" value=""><br>


	<input onkeyup="this.form.text4.value = parseInt(this.value)*10" name="text" type="text" size="4" maxlength="8"><label>RD$10</label><input type="text" name="text4" size="10" maxlength="10" id="4" onkeyup="obtenerSuma();" readonly="" value=""><br>

	<input onkeyup="this.form.text3.value = parseInt(this.value)*5" name="text" type="text" size="4" maxlength="8"><label>RD$5</label><input type="text" name="text3" size="10" maxlength="10" id="3" onkeyup="obtenerSuma();" readonly=""><br>

	<input onkeyup="this.form.text2.value = parseInt(this.value)*1" name="text" type="text" size="4" maxlength="8"><label>RD$1</label><input type="text" name="text2" size="10" maxlength="10" id="2" onkeyup="obtenerSuma();" readonly="" value=""><br>

	<input onkeyup="this.form.text1.value = parseInt(this.value)*50" name="text" type="text" size="4" maxlength="8"><label>US$50</label><input type="text" name="text1" size="10" maxlength="10" id="1" onkeyup="obtenerSuma();" readonly="" value=""><br><br>

	<label>Total</label> <input type="text" name="" id="resultado" readonly="" value="">

	

	<input onkeyup="this.form.text3.value = parseInt(this.value)*5" name="text" type="text" size="4" maxlength="8"><label>RD$5</label><input type="text" name="text3" size="10" maxlength="10" id="3" onkeyup="obtenerSuma();"><br>

	<input onkeyup="this.form.text2.value = parseInt(this.value)*1" name="text" type="text" size="4" maxlength="8"><label>RD$1</label><input type="text" name="text2" size="10" maxlength="10" id="2" onkeyup="obtenerSuma();"><br>

	<input onkeyup="this.form.text1.value = parseInt(this.value)*50" name="text" type="text" size="4" maxlength="8"><label>US$50</label><input type="text" name="text1" size="10" maxlength="10" id="1" onkeyup="obtenerSuma();"><br><br>

	<label>Total</label> <input type="text" name="" id="resultado" readonly="">

	 

</form>
<script>
            function obtenerSuma()
            {
                document.getElementById('resultado').value=parseFloat(document.getElementById('1').value)+parseFloat(document.getElementById('2').value)+parseFloat(document.getElementById('3').value)+parseFloat(document.getElementById('4').value)+parseFloat(document.getElementById('5').value)+parseFloat(document.getElementById('6').value)+parseFloat(document.getElementById('7').value)+parseFloat(document.getElementById('8').value)+parseFloat(document.getElementById('9').value)+parseFloat(document.getElementById('10').value)+parseFloat(document.getElementById('11').value);
            }
        </script> 





<?php 
$dinero = [ "billetes" => [2000, 1000, 500, 200, 100, 50, 20, 10, 5], "monedas" => [2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01] ];
 
$cantidad = 15879;

echo "Cantidad = $cantidad" . "<br>";
 
foreach($dinero as $medio_fisico => $valores)
{
    foreach($valores as $valor)
   {
           if($cantidad >= $valor)
           {
               echo "$medio_fisico con valor de \$$valor: ".floor($cantidad/$valor)."<br>";
               $cantidad = $cantidad % $valor; 
               if(!$cantidad)
                   break 2;
           }
   }
}

?>

<?php
$importe=1253.99;
 
echo "<p>El cambio de la cantidad ".$importe." es:</p>";
 
// indicamos todas las monedas posibles
$monedas=array(500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5, 0.20, 0.10, 0.05, 0.02, 0.01);
 
// creamos un array con la misma cantidad de monedas
// Este array contendra las monedas a devolver
$cambio=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
 
// Recorremos todas las monedas
for($i=0; $i<count($monedas); $i++)
{
    // Si el importe actual, es superior a la moneda
    if($importe>=$monedas[$i])
    {
 
        // obtenemos cantidad de monedas
        $cambio[$i]=floor($importe/$monedas[$i]);
 
        // actualizamos el valor del importe que nos queda por didivir
        $importe=$importe-($cambio[$i]*$monedas[$i]);
    }
}
 
// Bucle para mostrar el resultado
for($i=0; $i<count($monedas); $i++)
{
    if($cambio[$i]>0)
    {
        if($monedas[$i]>=5)
            echo "Hay: ".$cambio[$i]." billetes de: ".$monedas[$i]." &euro;<br>";
        else
            echo "Hay: ".$cambio[$i]." monedas de: ".$monedas[$i]." &euro;<br>";
    }
}
?>





