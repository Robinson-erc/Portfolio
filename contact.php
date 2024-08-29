<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "eric.robinson1128@gmail.com"; // Replace with your email address
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
}
?>
