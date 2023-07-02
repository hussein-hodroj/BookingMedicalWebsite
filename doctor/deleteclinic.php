<?php
require_once '../connect.php';

if (isset($_POST['delete'])) {
    $id = $_POST['deleteid'];
    $sql = "DELETE FROM clinic
            WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $affectedRows = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        echo "Deleted $affectedRows rows successfully.";
        header("Location: ../doctorclinic.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

$conn->close();
?>
