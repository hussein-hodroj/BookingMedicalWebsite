<?php 
include "./connect.php";
 $email=$_POST['email'];
 $password1=$_POST['newpassword1'];
if(isset($_POST['submit'])){
 $sql = $conn->prepare("UPDATE user SET password= ? WHERE email = ?");
 $sql->bind_param('ss', $password1, $email);
 $sql->execute();
$page = "login.php";
header('Location: '.$page);
}

?>