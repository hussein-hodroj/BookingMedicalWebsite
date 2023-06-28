<?php
include "../connect.php";

if (isset($_POST["submit"])) {
   $id = $_GET['id'];
   $majorName = $_POST['majorname'];
   $id = filter_var($id, FILTER_VALIDATE_INT);
   $majorName = filter_var($majorName, FILTER_SANITIZE_STRING);
   if ($id === false || $majorName === false) {
      echo "Invalid input.";
      exit;
   }
   $sql = "UPDATE `doctormajor` SET `majorName` = ? WHERE id = ?";
   $stmt = mysqli_prepare($conn, $sql);
   if ($stmt === false) {
      echo "Failed to prepare statement.";
      exit;
   }
   mysqli_stmt_bind_param($stmt, "si", $majorName, $id);
   $result = mysqli_stmt_execute($stmt);

   if ($result) {
      header("Location: ../major.php?msg=Data updated successfully");
      exit;
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
   mysqli_stmt_close($stmt);
}
?>
