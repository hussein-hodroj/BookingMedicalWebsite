<?php
session_start();
require_once 'connect.php';
$name = $_SESSION['fullName'];


if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


}

?>                                   

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

    <style>

        .shadow-blue {
          box-shadow: 0 0 10px 0 rgba(24, 117, 216, 0.5);
        }
    
        button {
          margin-left:10px ;
          
        }
        body {
        background-color: Rgb(230,247,247)
      }
      </style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <i class="far fa-hospital"></i>
                </div>
                <div class="sidebar-brand-text mx-3">BookMyCare</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="doctorDashboard.php">
                    <i class="fas fa-chart-line"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Profile
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="doctorUpDatePro.php">
                    <i class="fas fa-user-edit"></i>
                    <span>Update Profile</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="doctorEditPass.php" >
                    <i class="fas fa-user-cog"></i>
                    <span>Edit Password</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Permissions
            </div>
    

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="doctorAddClinic.php">
                    <i class="fas fa-plus-circle"></i>
                    <span>Add Clinic</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="doctorClinic.php">
                    <i class="fas fa-clinic-medical"></i>
                    <span>Clinics</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="doctorBookingConf.php">
                    <i class="far fa-check-circle"></i>
                    <span>Confirmation</span></a>
            </li>
            

           
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    
                    <h3>Welcome <?php echo $name; ?></h3>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - User Information -->
                        <li class="nav-item ">
                            <a class="nav-link">
                                <img class="img-profile rounded-circle" src="img/logo.png">
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item">
                              <a class="nav-link" title="Full screen" data-widget="fullscreen" href="#" role="button">
                                <i class="fa fa-expand" style="font-size:110%"></i>
                              </a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" title="Logout"  data-toggle="modal" data-target="#logout" role="button">
                              <i class="fas fa-sign-out-alt" style='font-size:110%'></i>
                            </a>
                            </li>

                        <!-- logout modal -->
                        <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                Are you sure you want logout?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                  <a href="index.php" type="button" class="btn btn-danger">Logout</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end logout -->


                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Password</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><a href="#">Edit Password</a></li>
                        </ol>
                    </div>

                    <!-- Content Row -->
                    <!-- <div class="row">
                        
                    </div> -->
    <div class="container ">
      <div class="row m justify-content-center">
        <div class=" card shadow-blue p-3 " style="box-shadow: 0 0 10px 0 rgba(24, 117, 216, 0.5);border-top: solid rgb(83, 158, 245)">
          <div class="row g-0 ">
            <div class="col-xl-2 d-none d-xl-block ">
              <img src="img\editpswd.jpeg" alt="Reset password" class="img-fluid " width="100%" height="100%"  />

            </div>
            <div class="col-xl-10">
              <div class="p-5">
                <!-- <h4 class="card-title">Update Password</h4> -->
                <form id="updatePasswordForm" action="./admin editpassword-doctor/editpassword-doctor.php" method="POST">
              
                  <div class="form-group">
                    <label class="font-weight-bold" for="currentPassword">Current Password</label>
                    <input type="password" class="form-control" id="currentPassword" name="oldPassword"
                      placeholder="Enter your current password">
                  </div>oldPassword

                  <div class="form-group">
                    <label class="font-weight-bold" for="newPassword">New Password</label>
                    <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Enter your new password">
                  </div>

                  <div class="form-group">
                    <label class="font-weight-bold" for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="c_newPassword"
                      placeholder="Confirm your new password">
                  </div>
                  <div class="d-flex justify-content-end ">
                    <button type="submit" title="update" class="btn btn-primary " id="editpassword" name="update" >Update </button>
                    
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span><i><script>document.write(new Date().getFullYear())</script> &copy; <a class="text-primary" href="#">BookMyCare</a></i></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- ... your HTML code ... -->

    <script>
        $(document).ready(function() {
            $("#updatePasswordForm").submit(function(event) {
                event.preventDefault(); // Prevent the form from submitting
    
                // Reset previous error messages
                $(".error-message").remove();
                $(".is-invalid").removeClass("is-invalid");
    
                // Validate current password
                var currentPassword = $("#currentPassword").val().trim();
                if (currentPassword === "") {
                    $("#currentPassword").addClass("is-invalid");
                    $("<div class='text-danger error-message'>Please enter the correct current password.</div>").insertAfter("#currentPassword");
                }
    
                // Validate new password
                var newPassword = $("#newPassword").val().trim();
                if (newPassword === "") {
                    $("#newPassword").addClass("is-invalid");
                    $("<div class='text-danger error-message'>Please enter a new password.</div>").insertAfter("#newPassword");
                }
    
                // Validate confirm password
                var confirmPassword = $("#confirmPassword").val().trim();
                if (confirmPassword === "") {
                    $("#confirmPassword").addClass("is-invalid");
                    $("<div class='text-danger error-message'>Please confirm your new password.</div>").insertAfter("#confirmPassword");
                } else if (confirmPassword !== newPassword) {
                    $("#confirmPassword").addClass("is-invalid");
                    $("<div class='text-danger error-message'>Passwords do not match.</div>").insertAfter("#confirmPassword");
                }
    
                // Check if any errors exist
                var errorMessages = $(".error-message");
                if (errorMessages.length === 0) {
                    // Validation successful, display success message and refresh the page
                    alert("Password has been changed successfully.");
                    location.reload();
                }
            });
        });
    </script>
    
    
    
  

</body>

</html>