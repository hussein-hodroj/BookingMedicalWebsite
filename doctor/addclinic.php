<?php
require_once '../connect.php';
session_start();
$id = $_SESSION['id'];
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $clinicName = $_POST['name'];
    $clinicPhone = $_POST['phone'];
    $clinicAddress = $_POST['address'];
    $selectedGovernorateId = $_POST['governorate']; // Retrieve selected governorate ID directly
    $selectedMajorId = $_POST['major']; // Retrieve selected major ID directly
   
    // Insert clinic data into the clinic table
    $clinicInsertQuery = "INSERT INTO clinic (clinicname, phone, clinicFullAddress, clinicGovId, clinicMajorid, doctorid) 
                          VALUES ('$clinicName', '$clinicPhone', '$clinicAddress', '$selectedGovernorateId', '$selectedMajorId','$id')";
    mysqli_query($conn, $clinicInsertQuery);

    // Retrieve the newly inserted clinic's ID
    $clinicId = mysqli_insert_id($conn);;

  // Insert the schedule information into the Schedule table for each day
  $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
// Insert schedule data into the schedule table
for ($i = 1; $i <= 5; $i++) {
    $day = $_POST['day' . $i];
    $startTime = $_POST['start' . $i];
    $endTime = $_POST['end' . $i];

    // Calculate time slots
    $interval = new DateInterval('PT1H');
    $start = new DateTime($startTime);
    $end = new DateTime($endTime);
    $slots = [];
    while ($start < $end) {
        $slotStartTime = $start->format('H:i');
        $slotEndTime = $start->add($interval)->format('H:i');
        $slots[] = [$slotStartTime, $slotEndTime];
    }

    // Insert time slots into the schedule table
    foreach ($slots as $slot) {
        $slotStartTime = $slot[0];
        $slotEndTime = $slot[1];

        // Insert schedule data
        $scheduleInsertQuery = "INSERT INTO schedule (clinicid, weekday, starttime, endtime, timefrom, timeto) 
                                VALUES ('$clinicId', '$day', '$slotStartTime', '$slotEndTime', '$startTime', '$endTime')";
        mysqli_query($conn, $scheduleInsertQuery);
    }
}

header("location:../doctorAddClinic.php");

}
?>

    