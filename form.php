<?php

$nombre = $_POST("nombre");
$telefono = $_POST("telefono");
$email = $_POST("email");
$mensaje = $_POST("texto");

$mensaje = "Mensaje enviado por: " . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $email . "\r\n";
$mensaje .= "Mensaje: " . $_POST["mensaje"] . "\r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$destinatario = "rodri.carabajal@gmail.com";
$asunto = "ENVIADO DESDE PAGINA WEB.";

mail($destinatario, $asunto, utf8_decode($mensaje,$header));

$header ('location:index.html');

?>