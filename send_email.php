<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dati del form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email di destinazione
    $to = 'tuaemail@esempio.com';

    // Oggetto dell'email
    $subject = 'Richiesta di Contatto dal Sito Web';

    // Corpo dell'email
    $email_body = "Nome: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Messaggio:\n$message\n";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Invia l'email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Email inviata con successo.";
    } else {
        echo "Errore nell'invio dell'email.";
    }
} else {
    echo "Metodo di richiesta non valido.";
}
?>
