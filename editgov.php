<?php
include 'connect.php';
// $id = $_GET['editeid'];

if (isset($_POST['saveedite'])) {
    $id=$_POST['txtID'];
    $govname = $_POST['govname'];
    $sql = "UPDATE `governorate` SET govname='$govname' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die(mysqli_error($conn));
    }
} else {
    $sql = "SELECT * FROM `governorate` WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $govname = $row['govname'];
}
if($result){
    header('location:dashboard -gov.php');
    exit();
}
else{
    die(mysqli_error($conn));
}
?>