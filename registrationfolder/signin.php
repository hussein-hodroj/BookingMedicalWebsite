<?php 
require_once '../connect.php';

if(isset ($_POST["login"])){

    $email=$_POST["email"];
    $password=$_POST["password"];

    $errors = array();

    if (empty($email)) {
        $errors[] = "Email is required.";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        } 
}

if (empty($password)) {
    $errors[] = "Password is required.";
} elseif (strlen($password) < 8) {
    $errors[] = "Password must be at least 8 characters long.";
} elseif (!preg_match('/[A-Z]/', $password)) {
    $errors[] = "Password should contain at least one uppercase letter.";
} elseif (!preg_match('/[a-z]/', $password)) {
    $errors[] = "Password should contain at least one lowercase letter.";
} elseif (!preg_match('/[0-9]/', $password)) {
    $errors[] = "Password should contain at least one digit.";
}

if (empty($errors)){

$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $query);  

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $roleId = $row['roleid'];
    $name = $row['fullName'];

    if ($roleId == 1) {
        session_start();
        $_SESSION['fullName'] = $name;
        header("Location: ../dashboard.php");
        exit(); 
    } elseif ($roleId == 2) {
        session_start();
        $_SESSION['fullName'] = $name;
        header("Location: ../doctordashboard.php");
        exit(); 
    }
    elseif ($roleId == 3) {
        session_start();
        $_SESSION['fullName'] = $name;
        header("Location: ../dashboardPatient.php");
        exit(); 
    }
} else {
    header("Location: ../login.php");
    exit(); 
}
} 
}


?>