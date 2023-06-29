<?php  
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    // Getting user data
    $name = htmlspecialchars($_POST["name"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $mailTo = 'alimokbel2022@hotmail.com';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'medmedresetpass@gmail.com';
    $mail->Password = 'bvuilvevngoglngx';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom($email, $name);
    $mail->addAddress($mailTo);
    $mail->Subject = $subject;
    $mail->Body = "<h3>New Message from the Website Contact Form</h3>
                   <p><strong>Name:</strong> $name</p>
                   <p><strong>Email:</strong> $email</p>
                   <p><strong>Subject:</strong> $subject</p>
                   <p><strong>Message:</strong> $message</p>";
    $mail->isHTML(true);
    if ($mail->send()) {
        header("Location: ./index.php?msg=message has been sent ");
    } else {
        echo "Sorry, an error occurred while sending your message.";
    }
}
 
$conn->close();
?>