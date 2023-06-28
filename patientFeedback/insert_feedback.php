<?php
include "../connect.php";

if (isset($_POST['savefeedback'])) {
    $doctorID = $_POST['doctorSelect'];
    $feedback = $_POST['feedback'];
    $patientID = $_POST['patientId'];
    
    $doctorQuery = "SELECT fullName FROM user WHERE id = '$doctorID'";
    $doctorResult = mysqli_query($conn, $doctorQuery);
    if ($doctorResult && mysqli_num_rows($doctorResult) > 0) {
        $doctorData = mysqli_fetch_assoc($doctorResult);   
    } else {
        $doctorName = "Unknown Doctor";
    }
    $query = "INSERT INTO feedback (doctorid, patientid, feedback) VALUES ('$doctorID', '$patientID', '$feedback')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../feedbacksPatient.php?msgg=Data has been added");
    } else {
        echo "Error: " . mysqli_error($conn);
    } 
}
$conn->close();
?>