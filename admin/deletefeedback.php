<?php
require_once '../connect.php';

if (isset($_POST['submit'])) {
    $id = $_POST['deleteId'];
    $sql = "DELETE f
    FROM feedback AS f
    JOIN user AS u ON u.id = f.patientid
    JOIN user AS d ON d.id = f.doctorid 
    WHERE u.id = $id";

$stmt = mysqli_prepare($conn, $sql);
if ($stmt) {
mysqli_stmt_execute($stmt);
$affectedRows = mysqli_stmt_affected_rows($stmt);
mysqli_stmt_close($stmt);
echo "Deleted $affectedRows rows successfully.";
header("Location: ../feedback.php");
} 
else {
echo "Error: " . mysqli_error($conn);
}
}
 $conn->close();
?>
