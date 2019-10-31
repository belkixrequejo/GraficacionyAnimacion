<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tema = $_POST['tema'];
$mensajes = $_POST['mensaje'];




$para = 'belkix.requejo@pucese.edu.ec';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, $mensaje);
header("Location:contact.html");

?>