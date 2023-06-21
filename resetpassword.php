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
        <form action="newpassword.php" method="POST">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                 <img src="img/Resetpassword.gif" alt="Sample photo" class="ml-4 img-fluid"/>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><span style="color:#37A3BE;">Reset Your Password</span></h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="email" 
                                                placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="newpassword1" 
                                                placeholder="New Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="confirmpassword" placeholder="Confirm Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="newpassword">
                                            Reset
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small text-danger" href="login.html">Already have an account? Login!</a>
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
    </form>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script>
        $(document).ready(function(){
            $("form.user").submit(function(event) {
                event.preventDefault(); // Prevent the form from submitting
    
                // Perform validation
                var email = $("#email").val();
                var password = $("#password").val();
                var confirmPassword = $("#confirmpassword").val();
    
                // Reset previous error messages
                $(".error-message").remove();
                $(".is-invalid").removeClass("is-invalid");
    
               // Validate password
                var password = $("#password").val().trim();
                if (password === "") {
                    $("#password").addClass("is-invalid");
                    $("<div class='text-danger error-message'>Please enter a password.</div>").insertAfter("#password");
                } else if (password.length < 8) {
                    $("#password").addClass("is-invalid");
                    $("<div class='text-danger error-message'>Password must be at least 8 characters long.</div>").insertAfter("#password");
                }
                else if (!/(?=.*[A-Z])(?=.*\d)/.test(password)) {
                    $("#password").addClass("is-invalid");
                    $("<div class='text-danger error-message'>Password must contain at least one uppercase letter and one number.</div>").insertAfter("#password");
                }
               


    
                // Validate Confirm Password
                if (confirmPassword.trim() === "") {
                    $("#confirmpassword").addClass("is-invalid");
                    $("<div class='text-danger error-message'>Please confirm your password.</div>").insertAfter("#confirmpassword");
                } else if (confirmPassword !== password) {
                    $("#confirmpassword").addClass("is-invalid");
                    $("<div class='text-danger error-message'>Passwords do not match.</div>").insertAfter("#confirmpassword");
                }
    
                // Check if any errors exist
                if ($(".error-message").length === 0) {
                    // Validation successful, redirect to login page
                    window.location.href = "login.html";
                }
            });
        });
    </script>
    
</body>

</html>