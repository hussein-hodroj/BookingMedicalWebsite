<?php
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST['submit'])) {
    $email = filter_input(INPUT_POST, 'emailInput', FILTER_SANITIZE_EMAIL);
    if ($email !== false && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $rejectionReason = $_POST['rejectionReason'];
        sendRejectionEmail($email, $rejectionReason);
        
        deleteUser($_POST['deleteId']);
        header("Location: ../doctorconf.php?msg=Email has been sent and user has been deleted");
        exit();
    } else {
        header("Location: ../doctorconf.php?msgemail=Invalid email address");
        exit();
    }
}

function sendRejectionEmail($email, $rejectionReason) {
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
    $mail->Body = $rejectionReason;
    $mail->send();
}

function deleteUser($id) {
    include '../connect.php';
    $stmt = $conn->prepare('DELETE FROM user WHERE id = ?');
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
