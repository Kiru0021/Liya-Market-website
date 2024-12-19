<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send an email (You can replace this with your email details)
    $to = "your-email@example.com";  // Replace with your email address
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "There was an error sending the message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
