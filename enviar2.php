<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$tema = $_POST['tema'];
$mensajes = $_POST['mensaje'];


$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $mensajes" \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'belkix.requejo@pucese.edu.ec';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, $mensaje);
header("Location:contact.html");

?>