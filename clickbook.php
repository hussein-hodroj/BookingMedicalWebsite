<?php
require_once "connect.php";
session_start();
$name = $_SESSION['fullName'];
$doctorName = isset($_POST['doctorName']) ? $_POST['doctorName'] : '';
$major = isset($_POST['major']) ? $_POST['major'] : '';
$governorate = isset($_POST['governorate']) ? $_POST['governorate'] : '';
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

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon ">
                    <i class="far fa-hospital"></i>
                </div>
                <div class="sidebar-brand-text mx-3">BookMyCare</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboardPatient.php">
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
                <a class="nav-link" href="pUpdateProfile.php">
                    <i class="fas fa-user-edit"></i>
                    <span>Update Profile</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="pEditpassword.php">
                    <i class="fas fa-user-cog"></i>
                    <span>Edit Password</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Patient Permissions
            </div>
    

            <!-- Nav Item -->

            <li class="nav-item active">
                <a class="nav-link" href="patientbook.php">
                    <i class="fas fa-calendar-plus"></i>
                    <span>Add Booking</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="findDoctor.php">
                    <i class=" fas fa-user-md"></i>
                    <span>Find Doctors</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="appointmentPatient.php">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Appointments</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="feedbacksPatient.php">
                    <i class="fas fa-comments"></i>
                    <span>Feedback</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
          

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
                    
                    <h3 class="pt-2">Welcome <?php echo $name;?></h3>

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
                                  <a href="logout.php" type="button" class="btn btn-danger">Logout</a>
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
                        <h1 class="h3 mb-0 text-gray-800">Book An Appointments</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item "><a href="#">Book An Appointments</a></li>
                        </ol>
                    </div>

                    <!-- Content Row -->

                    <!-- <div class="row">
                        
                    </div> -->
                    <div class="row mt-2 mb-4 d-flex justify-content-between"> 
                        <a href="patientbook.php">
                            <button type="button" title="back" class="btn btn-primary text-center text-white" style="margin-left: 38px;">Back</button> 
                        </a>
                        <a href="#">
                        <button type="button" title="feedback" class="btn btn-primary text-center text-white" style="margin-right: 48px;">Book An Appointment</button> 
                    </a>
                   
                    </div>
                    <div class="container"> 
                        <div class="row mt-3 ">
                            <div class="col-12 ">
                            <table class="table text-center table-striped table-light table-bordered border-primary" style="box-shadow: 0 0 10px 0 rgba(24, 117, 216, 0.5);border-top: solid rgb(83, 158, 245)">
                             <thead>
                                   <tr>
                                       <th scope="col">Doctor Name</th>
                                       <th scope="col">Major</th>
                                       <th scope="col">Governorate</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>            
                                       <td><?php echo $doctorName; ?></td>
                                       <td><?php echo $major; ?></td>
                                       <td><?php echo $governorate; ?></td>            
                                   </tr>      
                               </tbody>
                           </table>




                            </div>
                            
                        </div>
                        <div class="row mt-4">
                            <div class="col-2 ">
                            <h5 class="text-black form-group d-inline-block" style="border-bottom: solid rgb(5, 81, 151); text-shadow: rgb(5, 81, 151);">Monday:</h5> <br>
                            </div>
                           
                            <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt"  id="radio1">  <label class="form-check-label">8:00AM->9:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt"  id="radio2">  <label class="form-check-label">9:00AM->10:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio3" disabled>  <label class="form-check-label"  STYLE="text-decoration:line-through;">10:00AM->11:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio4" disabled>  <label class="form-check-label" STYLE="text-decoration:line-through;">11:00AM->12:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio5" disabled>  <label class="form-check-label"  STYLE="text-decoration:line-through;">12:00AM->1:00AM</label>  
                        </div>
                    
                        </div>
                        <div class="row mt-4">
                            <div class="col-2">
                            <h5 class="text-black form-group d-inline-block" style="border-bottom: solid rgb(5, 81, 151); text-shadow: rgb(5, 81, 151);">Tuesday:</h5> <br>
                            </div>

                            <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt"  id="radio1">  <label class="form-check-label">8:00AM->9:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt"  id="radio2" disabled>  <label class="form-check-label"  STYLE="text-decoration:line-through;">9:00AM->10:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio3">  <label class="form-check-label">10:00AM->11:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio4" disabled>  <label class="form-check-label" STYLE="text-decoration:line-through;">11:00AM->12:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio5">  <label class="form-check-label">12:00AM->1:00AM</label>  
                        </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-2">
                            <h5 class="text-black form-group d-inline-block" style="border-bottom: solid rgb(5, 81, 151); text-shadow: rgb(5, 81, 151);">Wednesday:</h5> <br>
                            </div>

                            <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt"  id="radio1" disabled>  <label class="form-check-label"  STYLE="text-decoration:line-through;">8:00AM->9:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt"  id="radio2">  <label class="form-check-label">9:00AM->10:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio3">  <label class="form-check-label">10:00AM->11:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio4" disabled>  <label class="form-check-label" STYLE="text-decoration:line-through;">11:00AM->12:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio5">  <label class="form-check-label">12:00AM->1:00AM</label>  
                        </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-2">
                            <h5 class="text-black form-group d-inline-block" style="border-bottom: solid rgb(5, 81, 151); text-shadow: rgb(5, 81, 151);">Thursday:</h5> <br>
                            </div>
                            <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt"  id="radio1" disabled>  <label class="form-check-label"  STYLE="text-decoration:line-through;">8:00AM->9:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt"  id="radio2" disabled>  <label class="form-check-label"  STYLE="text-decoration:line-through;">9:00AM->10:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio3">  <label class="form-check-label">10:00AM->11:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio4">  <label class="form-check-label">11:00AM->12:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio5">  <label class="form-check-label">12:00AM->1:00AM</label>  
                        </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-2">
                            <h5 class="text-black form-group d-inline-block" style="border-bottom: solid rgb(5, 81, 151); text-shadow: rgb(5, 81, 151);">Friday:</h5> <br>
                            </div>
                           <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt"  id="radio1">  <label class="form-check-label">8:00AM->9:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt"  id="radio2" disabled>  <label class="form-check-label"  STYLE="text-decoration:line-through;">9:00AM->10:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio3">  <label class="form-check-label">10:00AM->11:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio4" disabled>  <label class="form-check-label" STYLE="text-decoration:line-through;">11:00AM->12:00AM</label>  
                        </div>
                        <div class="col-2 mt-1">
                            <input type="radio" class="form-check-input" name="tt" id="radio5" disabled>  <label class="form-check-label"  STYLE="text-decoration:line-through;">12:00AM->1:00AM</label>  
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

</body>

</html>