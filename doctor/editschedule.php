<?php

require_once '../connect.php';

if (isset($_POST['save'])) {
    $id = $_POST['deleteid'];

    // Delete current schedule
    $deleteQuery = "DELETE FROM schedule
                    WHERE clinicid = ?";
    $stmtDelete = mysqli_prepare($conn, $deleteQuery);
    if ($stmtDelete) {
        mysqli_stmt_bind_param($stmtDelete, "i", $id);
        mysqli_stmt_execute($stmtDelete);
        $affectedRows = mysqli_stmt_affected_rows($stmtDelete);
        mysqli_stmt_close($stmtDelete);
        echo "Deleted $affectedRows rows successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Insert the new schedule information into the Schedule table for each day
    $weekdays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

    // Insert schedule data into the schedule table
    for ($i = 1; $i <= 5; $i++) {
        $weekday = $_POST['weekday' . $i];
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
                                    VALUES (?, ?, ?, ?, ?, ?)";
            $stmtInsert = mysqli_prepare($conn, $scheduleInsertQuery);
            if ($stmtInsert) {
                mysqli_stmt_bind_param($stmtInsert, "isssss", $id, $weekday, $slotStartTime, $slotEndTime, $startTime, $endTime);
                mysqli_stmt_execute($stmtInsert);
                mysqli_stmt_close($stmtInsert);
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }

    header("location:../doctorClinic.php");
}

$conn->close();
?>
