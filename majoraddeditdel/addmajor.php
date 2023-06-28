<?php
include "../connect.php";

if (isset($_POST["submit"])) {
   $majoradd = $_POST['majoradd'];
   $majoradd = filter_var($majoradd, FILTER_SANITIZE_STRING);
   $sql = "INSERT INTO `doctormajor`(`majorName`) VALUES (?)";
   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "s", $majoradd);
   $result = mysqli_stmt_execute($stmt);

   if ($result) {
      header("Location: ../major.php?msgg=Data has been added");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
   mysqli_stmt_close($stmt);
}
$conn->close();
?>