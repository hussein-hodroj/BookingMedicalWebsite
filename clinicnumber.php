<?php


$conn=new mysqli('localhost','root','','bookmycare');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the number of appointments
$sql = "SELECT COUNT(*) as clinicCount FROM clinic ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$clinicCount = $row['clinicCount'];

$conn->close();
echo "". $clinicCount." "."Clinics";

?>
