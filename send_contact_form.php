<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "info@bludive.net";
    $email_subject = "Contact Form Submission: $subject";
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    $headers = "From: $email\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        $_SESSION['status'] = "Your message has been sent successfully.";
    } else {
        $_SESSION['status'] = "There was an error sending your message.";
    }


    header("Location: contact.php");
    exit();
}
?>
