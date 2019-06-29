<html>
    <head>
        <title>Untitled</title>
        <script>
            function obtenerSuma()
            {
                document.getElementById('resultado').value=parseFloat(document.getElementById('1').value)+parseFloat(document.getElementById('2').value);
            }
        </script> 
    </head>
    <body>
        <form name="form1" method="post" action=""> 
             <input onkeyup="this.form.text2.value = parseFloat(this.value)*2000" name="textfield1" type="text" size="8" maxlength="8" >  

            <p> 
                Primer sumando: <input onkeyup="obtenerSuma();" id="1" type="text" size="8" maxlength="8">  
            </p> 
            <p> 
                Segundo sumando: <input onkeyup="obtenerSuma();" id="2" type="text" size="8" maxlength="8">  
            </p> 
            <p>
                Resultado es: <input id="resultado" type="text" size="10" maxlength="10"> 
            </p> 
        </form>
    </body>
</html>

<form name="prueba">
uno<input type="text" name="uno">
dos<input type="text" name="dos">
<input type="button" name="Ver total" value="Ver total" onclick="sumar(uno,dos)">
</form>