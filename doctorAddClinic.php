<?php
require_once 'connect.php';
session_start();
$id = $_SESSION['id'];
$name = $_SESSION['fullName'];
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        /*
         $(document).ready(function() {
    $("#reqClinicName").hide();
    $("#reqClinicPhone").hide();
    $("#reqClinicGov").hide();
    $("#reqClinicMajor").hide();
    $("#reqClinicAddress").hide();

    $("#submit").click(function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Check if any of the input fields are empty
        var name = $("#txtName").val();
        var phone = $("#txtPhone").val();
        var gov = $("#txtGov").val();
        var major = $("#txtMajor").val();
        var address = $("#txtAddress").val();

        var isFormValid = true; // Flag to track form validity

        if (name == "") {
            $("#reqClinicName").show();
            isFormValid = false;
        } else {
            $("#reqClinicName").hide();
        }

        if (phone == "") {
            $("#reqClinicPhone").show();
            isFormValid = false;
        } else {
            $("#reqClinicPhone").hide();
        }

        if (gov == "") {
            $("#reqClinicGov").show();
            isFormValid = false;
        } else {
            $("#reqClinicGov").hide();
        }

        if (major == "") {
            $("#reqClinicMajor").show();
            isFormValid = false;
        } else {
            $("#reqClinicMajor").hide();
        }

        if (address == "") {
            $("#reqClinicAddress").show();
            isFormValid = false;
        } else {
            $("#reqClinicAddress").hide();
        }

        // If the form is valid, redirect the user to clinic.html
        if (isFormValid) {
            window.location.href = "doctorClinic.html";
        }
    });
});
  /*


    </script>
    

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
            <li class="nav-item">
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
            <li class="nav-item">
                <a class="nav-link" href="doctorEditPass.php">
                    <i class="fas fa-user-cog"></i>
                    <span>Edit Password</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Doctor Permissions
            </div>
    

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
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
                    
                    <h3 class="pt-2">Welcome <?php echo $name; ?></h3>

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
                        <h1 class="h3 mb-0 text-gray-800">Add Clinic</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><a href="#">Add Clinic</a></li>
                        </ol>
                    </div>


         <div class="container">
           <div class="row">

              <div class="col">

                  <div class="card my-3 " style="box-shadow: 0 0 10px 0 rgba(24, 117, 216, 0.5);border-top: solid rgb(83, 158, 245) ">
                     <h3 class="text-primary" style="padding-top:2%; padding-left: 2%;" name ="clinic"></h3>
                      <div class="row g-0">
                          <div class="col-lg-6 ">
                             <div class="px-4">
                                <div class="mb-4">
                                <form id="addForm" action="doctor/addclinic.php" method="POST">
                                    <label class="form-label">Clinic Name</label>
                                    <input type="text" name="name" placeholder="please enter full name" class="form-control" id="txtName" />
                                </div>
                                </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="px-4">
                                <div class="mb-4">
                                    <label class="form-label">Clinic Phone Number</label>
                                    <input type="text" name="phone" placeholder="please enter your phone" class="form-control" id="txtPhone" />
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
    <div class="col-lg-6">
        <div class="px-4">
            <div class="mb-4">
                <label class="form-group">GOVERNORATE</label>
                <select class="form-control" id="txtGov" name="governorate">
                    <?php
                    // Fetch governorate names from the governorate table
                    $governorateQuery = "SELECT id, govname FROM governorate";
                    $governorateResult = mysqli_query($conn, $governorateQuery);
                    if ($governorateResult && mysqli_num_rows($governorateResult) > 0) {
                        while ($govRow = mysqli_fetch_assoc($governorateResult)) {
                            $govid = $govRow['id'];
                            $govname = $govRow['govname'];
                            echo "<option value='$govid'>$govname</option>";
                        }
                    } else {
                        echo "<option disabled selected>This governorate does not exist</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="px-4">
            <div class="mb-4">
                <label class="form-group">MAJOR</label>
                <select class="form-control" id="txtMajor" name="major">
                    <?php
                    // Fetch major names from the doctormajor table
                    $majorQuery = "SELECT id, majorName FROM doctormajor";
                    $majorResult = mysqli_query($conn, $majorQuery);
                    if ($majorResult && mysqli_num_rows($majorResult) > 0) {
                        while ($majorRow = mysqli_fetch_assoc($majorResult)) {
                            $majorid = $majorRow['id'];
                            $majorName = $majorRow['majorName'];
                            echo "<option value='$majorid'>$majorName</option>";
                        }
                    } else {
                        echo "<option disabled selected>This major does not exist</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
</div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="px-4">
                            <div class="mb-4">
                                <label class="form-label">FULL ADDRESS</label>
                                <input type="text" placeholder="please enter your address" class="form-control" id="txtAddress" name="address">
                            </div>
                            </div>
                        </div>
                            </div>
                    
                            <div class="row">
                                <div class="col-lg-6 " style="padding-top: 25px; padding-bottom: 35px;">
                                    <div class="px-4">
                                    <h5 class="border text-primary" style="display: flex; align-items: center; padding-left: 12px; 
                                    border-style: solid; border-radius: 10px; height: 40px;"> 
                                        Manage Schedule: </h5>
                                    </div>
                           </div>
                        </div>
                        
                        <div class="col-lg-12">
    <div class="table-responsive">
        <table class="table table-bordered" id="dynamic_field">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 5; $i++): ?>
                <tr>
                    <td>
                        <select class="form-control" name="day<?php echo $i; ?>">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                    </td>
                    <td>
                        <input type="time" class="form-control" name="start<?php echo $i; ?>" required>
                    </td>
                    <td>
                        <input type="time" class="form-control" name="end<?php echo $i; ?>" required>
                    </td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>
                            <div class="d-flex justify-content-end py-4 me-2">
                               
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary ">Save changes</button></a>
                            </div>
                    </div>
                </div>
            </div>
</form>
        </div>
    </div>
    </div>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span><i><script>document.write(new Date().getFullYear())</script> &copy; <a class="text-primary" href="#">BookMyCare</a></i></span>
            </div>
        </div>
        </footer>




    </div>

</div>

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