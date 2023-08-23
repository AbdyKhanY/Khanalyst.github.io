<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Validate and sanitize data if needed.
    
    $to = "wanagdon2@gmail.com"; // Your Gmail address
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email\r\n";
    
    // Send the email
    mail($to, $subject, $message, $headers);
}
?>
