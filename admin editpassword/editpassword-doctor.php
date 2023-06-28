<?php
session_start();
require_once '../connect.php';

if (isset($_POST['update'])) {

   $c_newPassword = $_POST['c_newPassword'];
   $newPassword = $_POST['newPassword'];
   $oldPassword = $_POST['oldPassword'];
   $email = $_SESSION['email'];
   $password = $_SESSION['user_pass'];
   
   $errors = array();

   if (empty($oldPassword)) {
	   $errors[] = "Old Password is required.";
    } elseif (empty($newPassword)) {
	    $errors[] = "New Password is required.";
	} elseif (empty($c_newPassword)) {
		$errors[] = "Password Confirmation is required.";
	}
	if(!password_verify($password,  $oldPassword)){
		$errors[] = "Old Password is Incorrect.";
	}elseif ($c_newPassword != $newPassword) {
		$errors[] = "Passwords Should Match.";
	}else{
		if (strlen($newPassword) < 8) {
			$errors[] = "newPassword must be at least 8 characters long.";
		} elseif (!preg_match('/[A-Z]/', $newPassword)) {
			$errors[] = "newPassword should contain at least one uppercase letter.";
		} elseif (!preg_match('/[a-z]/', $newPassword)) {
			$errors[] = "newPassword should contain at least one lowercase letter.";
		} elseif (!preg_match('/[0-9]/', $newPassword)) {
			$errors[] = "newPassword should contain at least one digit.";
		}
	}

   if (empty($errors)) {
	 
	   $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
	   
	   $stmt = $conn->prepare("UPDATE user SET password = ? WHERE email = ?");
	   $stmt->bind_param("ss", $hashedPassword, $email);
	   $stmt->execute();

	  
	   $stmt->close();

	  
	   $_SESSION['PassWord Updated'] = true;

	   
	   
	   header("Location: ../dashboard.php");
		 
	  
	   exit(); // Terminate the current script  
   }

   // Store the errors in a session variable for displaying on the registration page
   $_SESSION['registration_errors'] = $errors;
}

$conn->close();

?>