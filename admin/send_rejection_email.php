<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rejectionReason = $_POST['rejectionReason'];
    $doctorId = $_POST['doctorId'];

    // Retrieve the doctor's email from the database based on the doctor ID
    // Replace this with your actual code to retrieve the email
    $email = "doctor@example.com"; // Example email, replace with your implementation

    // Compose the email message
    $subject = "Application Rejection";
    $message = "Dear Doctor,\n\n";
    $message .= "Your application has been rejected for the following reason:\n";
    $message .= $rejectionReason;

    // Send the email
    $headers = "From: Your Name <your-email@example.com>"; // Replace with your name and email address
    if (mail($email, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Email sent successfully";
    } else {
        // Failed to send email
        echo "Failed to send email";
    }
} else {
    // Invalid request
    echo "Invalid request";
}
?>
