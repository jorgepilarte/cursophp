<?php
//crear variables para recibir la informacacion del formulario

if($_POST["comentario"]=="" || $_POST["destinatario"]=="" || $_POST["asunto"]=="" ){

	echo "Campo requerido: Email, Asunto, Mensaje";

	die();
}

$texto_mail=$_POST["comentario"];

$destinatario=$_POST["destinatario"];

$asunto=$_POST["asunto"];

$headers="MIME-Version: 1.0\r\n";

$headers.="Content-type:text/html; charset=iso-8859-1\r\n";

$headers.="From: InvPIDOM < inversionespidom@gmail.com >\r\n";

$envio=mail($destinatario, $asunto, $texto_mail, $headers);

if($envio){

	echo "Email enviado correctamente";
}else{

	echo "Error al enviar el Email";
}


?>