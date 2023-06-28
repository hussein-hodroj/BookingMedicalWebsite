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
    $selectedGovernorate = $_POST['governorate'];
    $selectedMajor = $_POST['major'];
   
    // Insert the selected governorate into the governorate table if it doesn't exist
    $governorateInsertQuery = "INSERT IGNORE INTO governorate (govname) VALUES ('$selectedGovernorate')";
    mysqli_query($conn, $governorateInsertQuery);

    // Retrieve the governorate ID
    $governorateIdQuery = "SELECT id FROM governorate WHERE govname = '$selectedGovernorate'";
    $governorateIdResult = mysqli_query($conn, $governorateIdQuery);
    $governorateId = mysqli_fetch_assoc($governorateIdResult)['id'];

    // Insert the selected major into the doctormajor table if it doesn't exist
    $majorInsertQuery = "INSERT IGNORE INTO doctormajor (majorName) VALUES ('$selectedMajor')";
    mysqli_query($conn, $majorInsertQuery);

    // Retrieve the major ID
    $majorIdQuery = "SELECT id FROM doctormajor WHERE majorName = '$selectedMajor'";
    $majorIdResult = mysqli_query($conn, $majorIdQuery);
    $majorId = mysqli_fetch_assoc($majorIdResult)['id'];

    // Insert clinic data into the clinic table
    $clinicInsertQuery = "INSERT INTO clinic (clinicname, phone, clinicFullAddress, clinicGovId, clinicMajorid, doctorid) 
                          VALUES ('$clinicName', '$clinicPhone', '$clinicAddress', '$governorateId', '$majorId','$id')";
    mysqli_query($conn, $clinicInsertQuery);

    // Retrieve the newly inserted clinic's ID
    $clinicId = mysqli_insert_id($conn);

    // Insert the schedule information into the Schedule table for each day
$days = ['day1', 'day2', 'day3', 'day4', 'day5'];

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
    while ($start <= $end) {
        $slotStartTime = $start->format('H:i');
        $start->add($interval);
        $slotEndTime = $start->format('H:i');
        $slots[] = [$slotStartTime, $slotEndTime];
    }

    // Insert time slots into the schedule table
    foreach ($slots as $slot) {
        $slotStartTime = $slot[0];
        $slotEndTime = $slot[1];

        // Insert schedule data
        $scheduleInsertQuery = "INSERT INTO schedule (clinicid, weekday, starttime, endtime) 
                                VALUES ('$clinicId', '$day', '$slotStartTime', '$slotEndTime')";
        mysqli_query($conn, $scheduleInsertQuery);
    }
}
header("location:../doctorAddClinic.php");

}
?>

    