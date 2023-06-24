<?php
include 'connect.php';

// $conn=new mysqli('localhost','root','','bookmycare');
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Retrieve the number of appointments
$sql = "SELECT COUNT(*) as appointementCount FROM booking";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$appointementCount = $row['appointementCount'];

$conn->close();
echo "". $appointementCount." "."Appointements";

?>
