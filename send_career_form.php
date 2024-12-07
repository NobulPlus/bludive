<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Handle file upload
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $file = $_FILES['resume']['tmp_name'];
        $fileName = $_FILES['resume']['name'];
        $fileType = $_FILES['resume']['type'];
        $fileContent = chunk_split(base64_encode(file_get_contents($file)));
    } else {
        $fileContent = '';
    }

    // Email details
    $to = "hr@bludive.net";
    $subject = "Job Application from $name";
    $boundary = md5("random"); // Boundary for the email

    // Headers
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: $email\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";

    // Email body
    $body = "--{$boundary}\r\n";
    $body .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= "Name: $name\r\n";
    $body .= "Email: $email\r\n";
    $body .= "Phone: $phone\r\n";
    $body .= "Message: $message\r\n";

    if ($fileContent) {
        $body .= "--{$boundary}\r\n";
        $body .= "Content-Type: {$fileType}; name=\"{$fileName}\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n";
        $body .= "Content-Disposition: attachment; filename=\"{$fileName}\"\r\n\r\n";
        $body .= $fileContent . "\r\n";
    }

    $body .= "--{$boundary}--";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        $_SESSION['status'] = "Your application has been sent successfully.";
    } else {
        $_SESSION['status'] = "There was an error sending your application.";
    }

    // Redirect to careers.php
    header("Location: careers.php");
    exit();
}
?>
