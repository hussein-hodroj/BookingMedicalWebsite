<?php

require_once '../connect.php';

if (isset($_POST['reset'])) {
    $id = $_POST['updateid'];
    $sqlUpdate = "UPDATE clinic AS c
                  JOIN schedule AS s ON c.id = s.clinicid
                  SET s.checked = 0
                  WHERE s.clinicid = ?";
    $stmtUpdate = mysqli_prepare($conn, $sqlUpdate);
    if ($stmtUpdate) {
        mysqli_stmt_bind_param($stmtUpdate, "i", $id);
        mysqli_stmt_execute($stmtUpdate);
        mysqli_stmt_close($stmtUpdate);
        header("location:../doctorClinic.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

$conn->close();
?>
