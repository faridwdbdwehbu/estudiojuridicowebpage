<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Incluye las clases de PHPMailer
require 'ruta/donde/has/colocado/PHPMailer/src/PHPMailer.php';
require 'ruta/donde/has/colocado/PHPMailer/src/Exception.php';
require 'ruta/donde/has/colocado/PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP de Gmail
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'farid2007brahim@gmail.com'; 
    $mail->Password   = 'Aixa 2000'; 
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Configuración del mensaje
    $mail->setFrom('tucorreo@gmail.com', 'Tu Nombre');
    $mail->addAddress('farid2007brahim@gmail.com'); // 
    $mail->Subject = 'Asunto del mensaje';
    $mail->Body    = 'Cuerpo del mensaje';

    // Envío del correo
    $mail->send();
    echo 'El mensaje se envió correctamente';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}
?>
