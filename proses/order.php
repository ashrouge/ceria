<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Email configuration
    $to = "recipient@example.com"; // Replace with the recipient's email address
    $headers = "From: $email";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Send the email using Gmail's SMTP server
    $smtp_server = "aspmx.l.google.com";
    $smtp_port = 25;

    // Set the ini settings for SMTP
    ini_set("SMTP", $smtp_server);
    ini_set("smtp_port", $smtp_port);

    // Send the email
    $success = mail($to, $subject, $email_message, $headers);

    if ($success) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.html");
    exit();
}
?>
