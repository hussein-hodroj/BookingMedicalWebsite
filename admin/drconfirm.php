<?php
require_once '../connect.php';

if (isset($_POST['accept'])) {
    $doctorId = $_POST['updateid'];
    echo $doctorId;

    // Update the doctorstatus column for the specified doctor ID
    $sql = "UPDATE user SET active = 1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $doctorId); // Assuming the ID is an integer
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header('Location: ../doctorconf.php?msg=success');
        exit(); // Make sure to exit after redirecting
    } else {
        echo "Error updating the record: " . $stmt->error;
    }

    $stmt->close(); // Close the statement
    $conn->close(); // Close the connection
}

// }
?>
