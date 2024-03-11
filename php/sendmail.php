<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Замените 'your_email@example.com' на вашу почту
    $to = "kinameri@gmail.com";
    $subject = "New Message from Contact Form";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $mailBody = "Username: $username\n" .
                "Email: $email\n" .
                "Phone: $phone\n" .
                "Message:\n$message";

    mail($to, $subject, $mailBody, $headers);
}
?>