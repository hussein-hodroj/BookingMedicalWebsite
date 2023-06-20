<?php
require_once '../connect.php';

session_start(); 

if (isset($_POST['register'])) {
   
    $fullName = $_POST['fullname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $role = ($_POST['role'] == 'doctor') ? 2 : 3;
    $certificate = (isset($_FILES['certificate'])) ? $_FILES['certificate'] : null;
    
    $errors = array();

    if (empty($fullName)) {
        $errors[] = "Full Name is required.";
    } else {
       
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fullName)) {
            $errors[] = "Only letters and white space allowed in Full Name.";
        }
    }

    
    if (empty($phone)) {
        $errors[] = "Phone is required.";
    }


    if (empty($email)) {
        $errors[] = "Email is required.";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        } else {
            // Check if the email already exists in the database
            $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                $errors[] = "User already exists.";
                echo "<script>alert('user already existed; Login your account here');</script>";
             
            }
            
            $stmt->close();
        }
    }

    if (empty($address)) {
        $errors[] = "Address is required.";
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

   
    if (empty($_POST['role'])) {
        $errors[] = "Role is required.";
    } elseif ($_POST['role'] != 'doctor' && $_POST['role'] != 'patient') {
        $errors[] = "Invalid role selected.";
    }

    if ($_POST['role'] == 'doctor' && empty($certificate)) {
        $errors[] = "Doctor's Certificate is required.";
    }

    if (empty($errors)) {
      
      
        
        $stmt = $conn->prepare("INSERT INTO user (fullName, password, email, address, phoneNumber, roleid, certificate, isdoctor) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $isDoctor =($_POST['role'] == 'doctor') ? 1 : 0;
        $stmt->bind_param("sssssisi", $fullName, $password, $email, $address, $phone, $role, $certificate, $isDoctor);
        $stmt->execute();

       
        $stmt->close();

       
        $_SESSION['registered'] = true;

        /*if ($_POST['role'] == 'doctor') {
            echo "<script>alert('Please wait for your doctor account to be verified.');</script>";
        }*/
        
        header("Location: ../login.php");
        exit(); // Terminate the current script

       
      
       
    }

    // Store the errors in a session variable for displaying on the registration page
    $_SESSION['registration_errors'] = $errors;
}

$conn->close();

?>
