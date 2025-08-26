<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if(!$name || !$email || !$message){
        http_response_code(400);
        echo "Faltan datos obligatorios.";
        exit;
    }

    $to = "dorvis.empresa@gmail.com"; // cambiar si deseas otro destino
    $subject = "Nuevo mensaje desde VisaListo MX";
    $body = "Nombre: {$name}\nCorreo: {$email}\n\nMensaje:\n{$message}\n";
    $headers = "From: no-reply@visalistomx.com\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if(mail($to, $subject, $body, $headers)){
        echo "✅ Mensaje enviado correctamente. ¡Gracias por contactarme!";
    } else {
        echo "❌ Hubo un problema al enviar el mensaje. Inténtalo más tarde.";
    }
} else {
    http_response_code(405);
    echo "Método no permitido.";
}
?>