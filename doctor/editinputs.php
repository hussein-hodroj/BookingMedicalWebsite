<?php
require_once '../connect.php';
session_start();

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    if (isset($_POST['edit'])) {
        $clinicid = $_POST['updateid'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $governorate = $_POST['governorate'];
        $major = $_POST['major'];
        $address = $_POST['address'];

        $sql = "UPDATE clinic 
                SET clinicname = ?,
                    phone = ?,
                    clinicGovid = ?,
                    clinicMajorid = ?,
                    clinicFullAddress = ?
                WHERE id = ? AND doctorid = ?";

        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssssi", $name, $phone, $governorate, $major, $address, $clinicid, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("Location: ../doctorclinic.php");

        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    echo "Error: Session ID not set.";
}

$conn->close();
?>
