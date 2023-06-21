<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BookMyCare</title>
    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">



</head>

<body class="bg-gradient-info">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="img/OnlineDoctor.gif" alt="Sample photo" class="img-fluid ml-4 mt-4" />
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><span style="color:#37A3BE;"> Create an Account!</span></h1>
                            </div>
                            <form class="user" action="registrationfolder/signup.php" method="POST" enctype="multipart/form-data" onsubmit = 'return validation();'>
                                <div class="form-group">
                                    <input type="text" id="fullname" class="form-control" placeholder="Full Name" name="fullname">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="phone" class="form-control" placeholder="Phone" name="phone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" id="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" id="password" class="form-control" placeholder="Password" name="password">
                                        </div>
                                        <div class="col-sm-6">
                                    <input type="text" id="address" class="form-control" placeholder="Address" name="address">
                                                </div>
                                </div>
                                <div class="form-group">
                                    <!-- <div class="mb-4"> -->
                                       <select name="role" class="form-control" id="role">
                                          <option selected disabled>Role</option>
                                          <option value="doctor">Doctor</option>
                                          <option value="patient">Patient</option>
                                       </select>
                                    <!-- </div> -->
                                </div>
                                <div id="certificate" name="certificate">
                                    <label class="form-label">Doctor's Cetificate:</label>
                                    <div class="form-group">
                                        <input type="file" name="certificate" id="certificate" title="Upload Certificate" class="form-control-border" />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" id="register" name="register">
                                    Register Account
                                  </button>
                                                </form>
                         
                            <hr>
                            <div class="text-center">
                                <a class="small text-danger" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- ... -->
<!-- ... -->
<script>
    
    $(document).ready(function(){
        $("#certificate").hide();

        $("#role").change(function(){
            if ($(this).val() == 'doctor') {
                $("#certificate").show();
            }
            else {
                $("#certificate").hide();
            }
        }); })

        
          function validation(){

            let isvalid = true;
            // Perform validation
            var fullname = $("#fullname").val();
            var phone = $("#phone").val();
            var email = $("#email").val();
            var address=$('#address').val();
            var password = $("#password").val();
            var role = $("#role").val();

            // Reset previous error messages
            $(".error-message").remove();
            $(".is-invalid").removeClass("is-invalid");

            // Validate Full Name
            if (fullname.trim() === "") {
                $("#fullname").addClass("is-invalid");
                isvalid = false;
                $("<div class='text-danger error-message'>Please enter your full name.</div>").insertAfter("#fullname");
            }

            // Validate Phone
            if (phone.trim() === "") {
                $("#phone").addClass("is-invalid");
                isvalid = false;
                $("<div class='text-danger error-message'>Please enter your phone number.</div>").insertAfter("#phone");
            }

            // Validate Email
            if (email.trim() === "") {
                $("#email").addClass("is-invalid");
                isvalid = false;
                $("<div class='text-danger error-message'>Please enter your email address.</div>").insertAfter("#email");
            } else if (!isValidEmail(email)) {
                $("#email").addClass("is-invalid");
                isvalid = false;
                $("<div class='text-danger error-message'>Please enter a valid email address.</div>").insertAfter("#email");
            }
            if (address.trim() === "") {
                $("#address").addClass("is-invalid");
                isvalid = false;
                $("<div class='text-danger error-message'>Please enter your address.</div>").insertAfter("#address");
            }

// Validate password
var password = $("#password").val().trim();
if (password === "") {
    $("#password").addClass("is-invalid");
    isvalid = false;
    $("<div class='text-danger error-message'>Please enter a password.</div>").insertAfter("#password");
} else if (password.length < 8) {
    $("#password").addClass("is-invalid");
    isvalid = false;
    $("<div class='text-danger error-message'>Password must be at least 8 characters long.</div>").insertAfter("#password");
} else if (!/(?=.*[A-Z])(?=.*\d)/.test(password)) {
    
    $("#password").addClass("is-invalid");
    isvalid = false;
    $("<div class='text-danger error-message'>Password must contain at least one uppercase letter and one number.</div>").insertAfter("#password");
}

            // Validate Role
            if (role === null) {
                $("#role").addClass("is-invalid");
                isvalid = false;
                $("<div class='text-danger error-message'>Please select a role.</div>").insertAfter("#role");
            }

       

        // Email validation helper function
        function isValidEmail(email) {
            // Regular expression to validate email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        if(isvalid)
        {
            return true;
        }
        return false;
    }
    
  </script>
  <!-- ... -->
  
</body>

</html>