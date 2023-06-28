<?php


include 'connect.php';

// Retrieve the number of appointments
$sql = "SELECT COUNT(*) as patientCount FROM role WHERE role = 3 ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$patientCount = $row['patientCount'];

$conn->close();
echo "". $patientCount." "."Patients";

?>
