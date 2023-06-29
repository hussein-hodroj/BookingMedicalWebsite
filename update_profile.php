<?php
include ('connect.php');
session_start();
if (!isset($_SESSION['fullName'])) {
    header('Location: login.php');
    exit();
}
    if(isset($_POST['submit'])){
        if(isset($_SESSION['fullName'])){
            $fullName1 = $_SESSION['fullName'];
            }

    $fullName = $_POST['fullName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];

    $sql = "UPDATE `user` SET `fullName` = '$fullName', `address` = '$address', `email` = '$email', `phoneNumber` = $phoneNumber WHERE `fullName` = '$fullName1'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      
        header('Location: login.php');
        exit();
    } else {
      
        echo "Error: " . mysqli_error($conn);
    }
}
$conn->close();
?>