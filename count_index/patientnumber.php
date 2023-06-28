<?php


$conn=new mysqli('localhost','root','','bookmycare');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the number of appointments
$sql = "SELECT COUNT(*) as patientCount FROM user WHERE roleid = 3 ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$patientCount = $row['patientCount'];

$conn->close();
echo "". $patientCount." "."Patients";

?>