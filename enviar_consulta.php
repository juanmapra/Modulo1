<?php

$nombre_form = $_POST['nombre'];
$correo_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];

$cuerpo_mail =
"Nombre:" . $nombre_form ."\r\n" .
"Correo electronico:" . $correo_form . "\r\n" .
"Mensaje:" . $mensaje_form;

$remitente = "juanmapra@yahoo.com.ar";
$asunto = "Mensaje desde el formulario proyecto modulo 1";

$cabeceras = 'From: ' . $correo_form . "\r\n" .
            'Reply-To: ' . $correo_form . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

if (mail($remitente, $asunto, $cuerpo_mail, $cabeceras)){
    echo "<p>El mensaje se ha enviado correctamente.</p>";
} else {
    echo "<p>Error al enviar el mensaje.</p>";
}
?>