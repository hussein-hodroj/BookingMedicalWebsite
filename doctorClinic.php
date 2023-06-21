<?php
require_once 'connect.php';
session_start();
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
        $(document).ready(function() {
            $("#reqClinicName").hide();
            $("#btnSave").click(function() {
            if ($("#txtName").val() == "")
                $("#reqClinicName").show();
            });
            $("#reqClinicPhone").hide();
            $("#btnSave").click(function() {
            if ($("#txtPhone").val() == "")
                $("#reqClinicPhone").show();
            });
                 
            $("#reqClinicGov").hide();
            $("#btnSave").click(function() {
            if ($("#txtGov").val() == "")
                $("#reqClinicGov").show();
            });
          
            $("#reqClinicMajor").hide();
            $("#btnSave").click(function() {
            if ($("#txtMajor").val() == "")
                $("#reqClinicMajor").show();
            });

            $("#reqClinicAddress").hide();
            $("#btnSave").click(function() {
            if ($("#txtAddress").val() == "")
                $("#reqClinicAddress").show();
            });
            
          
            
            
        });

  


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
            <li class="nav-item">
                <a class="nav-link" href="doctorAddClinic.php">
                    <i class="fas fa-plus-circle"></i>
                    <span>Add Clinic</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
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
                        <h1 class="h3 mb-0 text-gray-800">Clinics</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><a href="#">Clinics</a></li>
                        </ol>
                    </div>


    <!--dashboard-->
    <div class="container-fluid">
        <div class="row gx-5 " >
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 d-flex justify-content-end align-items-end"
               >
                <a href="doctorAddClinic.html" title="Add" class="btn bg-primary text-white mb-3">
                    <i class="fas fa-plus-square"></i>
                    Add clinic
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card" style="box-shadow: 0 0 10px 0 rgba(24, 117, 216, 0.5);border-top: solid rgb(83, 158, 245) ">

                    <div class="card-header ">
                        <div class="row ">
                            <div class="col-lg-12 d-flex justify-content-end align-items-end ">
                                <a href="#" title="Edit" class="btn btn-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal" style="margin-right: 8px;">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" title="Delete" class="btn btn-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalm">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-group mb-2">Clinic Name </label>
                                <input type="text" class="form-control mb-3" id="text"
                                  value=" White Teeth By H.H"  >
                            </div>
                            <div class="col-6">
                                <label class="form-group mb-2"> Clinic Phone Number </label>
                                <input type="text" class="form-control mb-3" id="text"
                                    value="+961 81622175">
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-6">
                                <label class="form-group mb-2"> Governorate </label>
                                <input type="text" class="form-control mb-3" id="text"
                                    value="Nabatieh">
                            </div>
                            <div class="col-6">
                                <label class="form-group mb-2"> Major </label>
                                <input type="text" class="form-control mb-3" id="text"
                                   value="Dentist">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label mb-2"> Full Address </label>
                                <input type="text" class="form-control mb-3" id="text"
                                   value="Habboush-Al Baydar">
                            </div>
                            
                            
                        </div>
                        <div class="row">
                        <div class="col-lg-6 " style="padding-top: 25px; padding-bottom: 35px;">
                            <h5 class="border text-primary" style="display: flex; align-items: center; padding-left: 12px; 
                            border-style: solid; border-radius: 10px; height: 40px;"> 
                                Manage Schedule: </h5>
                            
                       </div>
                    </div>
                        <div class="row">
                            <div class="col-12">
                               
                                <div class="row">
                                    <div class="col-4">
                                        <label class="form-label">Monday</label>
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="text" class="form-control" id="time" value="08:30 AM">
                                    </div>
                                    <div class="col-4 " style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="text" class="form-control" id="time" value="09:00 AM">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="form-label">Tuesday</label>
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="text" class="form-control" id="time" value="01:00 AM">
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="text" class="form-control" id="time" value="01:30 AM">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="form-label">Wednesday</label>
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="text" class="form-control" id="time" value="10:30 AM">
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="text" class="form-control" id="time" value="11:00 AM">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="form-label">Thursday</label>
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="text" class="form-control" id="time" value="10:00 AM">
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="text" class="form-control" id="time" value="10:30 AM">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="form-label">Friday</label>
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="text" class="form-control" id="time" value="08:30 AM">
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="text" class="form-control" id="time" value="09:00 AM">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="form-label">Saturday</label>
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="text" class="form-control" id="time" value="09:30 AM">
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="text" class="form-control" id="time" value="10:00 AM">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="form-label">Sunday</label>
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="text" class="form-control" id="time" value="09:00 AM">
                                    </div>
                                    <div class="col-4" style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="text" class="form-control" id="time" value="09:30 AM">
                                    </div>
                                </div>
                            </div>


                        </div>

                        
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Edit Clinic Informations</h5>
                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-group mb-2"> Clinic Name </label>
                                <input type="text" class="form-control " id="txtName"
                                    placeholder="Add Your Clinic Name">
                                    <span class="text-danger" id="reqClinicName">please enter clinic name</span>
                            </div>
                            <div class="col-6">
                                <label class="form-group mb-2"> Clinic Phone Number </label>
                                <input type="text" class="form-control " id="txtPhone"
                                    placeholder="Add Your Clinic Phone Number">
                                    <span class="text-danger" id="reqClinicPhone">please enter clinic Phone Number</span>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-6">
                                <label class="form-group mt-2"> Governorate </label>
                                <select class="form-control " id="txtGov">
                                    <option value="" selected hidden>please select the governorate</option>
                                    <option  value="Nabatieh">Nabatieh</option>
                                    <option  value="Beirut">Beirut</option>
                                    <option  value="Mount Lebanon">Mount Lebanon</option>
                                    <option  value="Beqaa">Beqaa</option>
                                    <option  value="North">North</option>
                                    <option  value="South">South</option>
                                    <option  value="Akkar">Akkar</option>
                                    <option  value="Baalbek-hermel">Baalbek-hermel</option>
                                    <option  value="Keserwen-Jbeil">Keserwen-Jbeil</option>
                                   
                                </select>
                                <span class="text-danger" id="reqClinicGov">please select the governorate</span>
                            </div>
                            <div class="col-6">
                                <label class="form-group mt-2"> Major </label>
                                <select class=" form-control " id="txtMajor">
                                    <option value="" selected hidden>please select the major </option>
                                    <option value="Dentist">Dentist</option>
                                    <option value="Dietitian">Dietitian</option>
                                    <option value="Surgeon">Surgeon</option>
                                    <option value="Cardiologist">Cardiologist</option>
                                    <option value="Neurologist">Neurologist</option>
                                    <option value="Cosmetic">Cosmetic</option>
                                    <option value="Public Health">Public Health</option>
                                    <option value="Gynecologist">Gynecologist</option>
                                </select>
                                <span class="text-danger" id="reqClinicMajor">please select the major</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label mb-2"> Full Address </label>
                                <input type="text" class="form-control" id="txtAddress"
                                    placeholder="Add Your Clinic Address">
                                    <span class="text-danger" id="reqClinicAddress">please enter the full address</span>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="form-group"> Manage Schedule</label>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label">Monday</label>
                                    </div>
                                    <div class="col-5 p-2" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                    <div class="col-5 p-2 " style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label">Tuesday</label>
                                    </div>
                                    <div class="col-5 p-2" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                    <div class="col-5 p-2" style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label">Wednesday</label>
                                    </div>
                                    <div class="col-5 p-2" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                    <div class="col-5 p-2" style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label">Thursday</label>
                                    </div>
                                    <div class="col-5 p-2" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                    <div class="col-5 p-2" style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label">Friday</label>
                                    </div>
                                    <div class="col-5 p-2 " style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                    <div class="col-5 p-2" style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label">Saturday</label>
                                    </div>
                                    <div class="col-5 p-2" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                    <div class="col-5 p-2" style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label">Sunday</label>
                                    </div>
                                    <div class="col-5 p-2" style="padding-left: 40px;">
                                        <label class="form-label">From</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                    <div class="col-5 p-2" style="padding-left: 40px;">
                                        <label class="form-label">To</label>
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btnSave">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
        <div class="modal fade" id="modalm" tabindex="-1" aria-labelledby="modalmLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalmLabel">Delete Clinic</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are You Sure You Want To Delete It?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Yes</button>
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
    </div>

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