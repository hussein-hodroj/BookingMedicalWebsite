<?php
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    require_once '../connect.php';
    $email = filter_input(INPUT_POST, 'emailInput', FILTER_SANITIZE_EMAIL);
    if ($email !== false && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $reminder = $_POST['reminder'];
        sendreminderemail($email, $reminder);
       
    } 
    
    $id = $_POST['updateid'];
    echo $id;

    
    $sql = "UPDATE booking SET statuss= 'accepted'  WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); 
    $stmt->execute();

   
    $stmt->close(); 
    header('Location: ../doctorconf.php?msg=success');
        exit(); 
}
function sendreminderemail($email, $reminder) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'medmedresetpass@gmail.com';
    $mail->Password = 'bvuilvevngoglngx';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('medmedresetpass@gmail.com');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Application Rejection';
    $mail->Body = $reminder;
    $mail->send();
}
$conn->close();

?>