<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$to = "victor.alcramos@gmail.com"; // Nuestro correo de contacto

// recogeremos los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = nl2br($_POST['mensaje']);
$asunto = 'Mensaje de contacto CC';

if($nombre == "" || $email == "" || $mensaje == ""):
	echo '<div class="alert alert-danger">Todos los campos son requeridos para el envio</div>';
else:

	$mail->From = $email;
	$mail->addAddress($to);
	$mail->Subject = $asunto;
	$mail->isHtml(true);
	$mail->Body = '
	<strong> Nombre:'.$nombre.'</strong> <br>
	<strong> E-mail:'.$email.'</strong> <br>
	<strong> Mensaje:</strong><br>
	<p>'.$mensaje.'</p>';

	$mail->CharSet = 'UTF-8';
	$mail->send();
	// $result='<div class="alert alert-success">¡Gracias por escribirnos! estaremos en contacto con usted</div>';
endif;

?>
