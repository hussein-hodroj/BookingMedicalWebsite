<?php
// // Database connection
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bookmycare";

$conn=new mysqli('localhost','root','','bookmycare');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the number of appointments
$sql = "SELECT COUNT(*) as doctorCount FROM role WHERE role = 2 ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$doctorCount = $row['doctorCount'];

$conn->close();
echo "". $doctorCount." "."Doctors";

?>
