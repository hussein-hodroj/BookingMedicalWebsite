<?php
include "../connect.php";

if (isset($_GET["id"])) {
   $id=$_GET["id"];
   $sql = "DELETE FROM `feedback` WHERE id = ?";
   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "i", $id);
   $result = mysqli_stmt_execute($stmt);

   if ($result) {
      header("Location: ../feedbacksPatient.php?msggg=Data has been deleted");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
   mysqli_stmt_close($stmt);
}
$conn->close();
?>