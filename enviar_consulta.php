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

mail($remitente, $asunto, $cuerpo_mail, $cabeceras);

if (mail($remitente, $asunto, $cuerpo_mail, $cabeceras)){
    echo "<p>El mensaje se ha enviado correctamente.</p>";
} else {
    echo "<p>Error al enviar el mensaje.</p>";
}

// $connection = mysqli_connect('localhost', 'root', '', 'desarrollo_php_utn') or die ("No se pudo conectar a la base de datos");

$connection = mysqli_connect('sql110.infinityfree.com', 'if0_36262667', 'wCQ5SCdoK789Ea', 'if0_36262667_desarrollo_php_utn') or die ("No se pudo conectar a la base de datos");

$query = "INSERT INTO consulta_form VALUES (DEFAULT, '$nombre_form', '$correo_form', '$mensaje_form')";

mysqli_query($connection, $query);

header("Location: contact.php?ok");
mysqli_close($connection);
exit;
?>