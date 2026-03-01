<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "szkody@cwspiekarski.pl";
    $subject = "Nowe zgłoszenie szkody - CWS Piekarski";

    $body = "Nowe zgłoszenie szkody:\n\n";
    $body .= "Imię i nazwisko: $name\n";
    $body .= "Telefon: $phone\n";
    $body .= "E-mail: $email\n\n";
    $body .= "Opis zdarzenia:\n$message\n";

    $headers = "From: formularz@cwspiekarski.pl\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $subject, $body, $headers);

    header("Location: dziekujemy.html");
    exit;
}
?>