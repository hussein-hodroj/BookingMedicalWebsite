<?php
include "../connect.php";

if (isset($_POST["submit"])) {
   $id = $_GET['id'];
   $feedback = $_POST['feedback'];
   $id = filter_var($id, FILTER_VALIDATE_INT);
   $feedback = filter_var($feedback, FILTER_SANITIZE_STRING);
   if ($id === false || $feedback === false) {
      echo "Invalid input.";
      exit;
   }
   $sql = "UPDATE `feedback` SET `feedback` = ? WHERE id = ?";
   $stmt = mysqli_prepare($conn, $sql);
   if ($stmt === false) {
      echo "Failed to prepare statement.";
      exit;
   }
   mysqli_stmt_bind_param($stmt, "si", $feedback, $id);
   $result = mysqli_stmt_execute($stmt);

   if ($result) {
      header("Location: ../feedbacksPatient.php?msg=Data updated successfully");
      exit;
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
   mysqli_stmt_close($stmt);
}
$conn->close();
?>