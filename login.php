<?php 
session_start();
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

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                 <img src="img/login.gif" alt="Sample photo" class="ml-4 img-fluid"/>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><span style="color:#37A3BE;">Welcome Back!</span></h1>
                                    </div>
                                    <form class="user" action="registrationfolder/signin.php" method="POST" enctype="multipart/form-data" onsubmit = 'return validation();'>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="example" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address" name="email" >
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" name="user_password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" id="login" name="login">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small text-danger" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
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
    <script>
         function validation(){

            let isvalid = true;
    
                // Perform validation
                var email = $("#example").val();
                var password = $("#password").val();
    
                // Reset previous error messages
                $(".error-message").remove();
                $(".is-invalid").removeClass("is-invalid");
    
                // Validate Email
                if (email.trim() === "") {
                    $("#example").addClass("is-invalid");
                    isvalid=false;
                    $("<div class='text-danger error-message'>Please enter your email address.</div>").insertAfter("#example");
                } else if (!isValidEmail(email)) {
                    $("#example").addClass("is-invalid");
                    isvalid=false;
                    $("<div class='text-danger error-message'>Please enter a valid email address.</div>").insertAfter("#example");
                }
    
                // Validate Password
                if (password.trim() === "") {
                    $("#password").addClass("is-invalid");
                    isvalid=false;
                    $("<div class='text-danger error-message'>Please enter your password.</div>").insertAfter("#password");
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
    


</body>

</html>