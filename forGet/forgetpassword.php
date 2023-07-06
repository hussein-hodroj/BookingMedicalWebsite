<?php
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if ($email !== false && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (emailExists($email)) {
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
            $mail->Subject = 'Here is the subject';
            $mail->Body = 'To reset your password click <a href="http://localhost/BookingMedicalWebsite/resetpassword.php"> HERE </a>';
            if ($mail->send()){
                header("Location: ../forgot-password.php?msg=email has been sent ");
            }
        }else{ 
            header("Location: ../forgot-password.php?msgemail=email does not exist ");
    
        }
    }
}

function emailExists($email) {
    include '../connect.php';
    $stmt = $conn->prepare('SELECT COUNT(*) as count FROM user WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $count = $row['count'];
    return $count > 0;
}
$conn->close();
?>