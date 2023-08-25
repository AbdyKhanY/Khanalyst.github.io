<?php
require 'PHPMailer/PHPMailerAutoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer;
    
    // SMTP configuration for Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'abdykhan.edu@gmail.com'; // Replace with your Gmail email
    $mail->Password = 'kaaraan4'; // Replace with your Gmail password

    // Sender and recipient
    $mail->setFrom($email, $name);
    $mail->addAddress('abdykhan.edu@gmail.com'); // Replace with your desired recipient email
    
    // Email subject and body
    $mail->Subject = "New Contact Form Submission from $name";
    $mail->Body = $message;
    
    // Send the email
    if ($mail->send()) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed: " . $mail->ErrorInfo;
    }
} else {
    echo "Invalid request";
}
?>
