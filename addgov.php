<?php
include 'connect.php';

if(isset($_POST['saveadd'])){
    $newgov = $_POST['newgov'];
    $sql = "INSERT INTO `governorate` (govname) VALUES ('$newgov')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:dashboard -gov.php');
        exit();
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
