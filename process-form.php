<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "abdykhan.edu@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email\r\n";
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
} else {
    echo "Invalid request.";
}
?>
