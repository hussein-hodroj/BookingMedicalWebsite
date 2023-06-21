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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Feedback</title>
    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom CSS -->
    <style>
        .modal-header {
            background-color: #4e73df;
            color: white;
        }
    </style>


</head>

<body>
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

            <li class="nav-item">
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
            <li class="nav-item active">
                <a class="nav-link" href="feedbackPatient.php">
                    <i class="fas fa-comments"></i>
                    <span>Feedback</span></a>
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


                    </form>
                    <h3 class="pt-2">Welcome <?php echo $name; ?> </h3>

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
                            <a class="nav-link" title="Logout" data-toggle="modal" data-target="#logout" role="button">
                                <i class="fas fa-sign-out-alt" style="font-size:110%"></i>
                            </a>
                        </li>

                        <!-- logout modal -->
                        <div class="modal fade" id="logout" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
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
                        <h1 class="h3 mb-0 text-gray-800">Feedback</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><a href="#">Feedback</a></li>
                        </ol>
                    </div>

                    <!-- Content Row -->
                    <div class="container d-flex justify-content-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#mymodelfeedback">Add Feedback</button>
                        <div class="modal" id="mymodelfeedback">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Feedback</h5>
                                        <button type="button" class="btn btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">

                                            <option selected disabled>Choose Your Doctor</option>
                                            <option>Dr Nour</option>
                                            <option>Dr Joya</option>
                                            <option>Dr Hassan</option>
                                            <option>Dr Hussein</option>
                                        </select>



                                        <div class="form-floating mt-4">
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                            <label for="flatingTextarea2">New Feedback</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" id="savefeedback" class="btn btn-primary">Save</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="row  justify-content-center mt-5">
                        <div class="col-lg-12">

                            <table class="table text-center table-striped table-light table-bordered "
                                style="box-shadow: 0 0 10px 0 rgba(24, 117, 216, 0.5)">
                                <thead>
                                    <tr class="table-primary">

                                        <th scope="col ">#</th>
                                        <th scope="col">Dr Name</th>
                                        <th scope="col">Doctor Major</th>
                                        <th scope="col">Previous Feedback</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row " style="vertical-align: middle;">1</th>

                                        <td class="text-center " style="vertical-align: middle;"><b> Nour</b></td>
                                        <td>Dietitian</td>
                                        <td class="text-justify " style="width: 350px;">Dr. Nour is an outstanding
                                            doctor. She takes the time to listen to his patients and shows compassion
                                            and care.</td>
                                        <td style="vertical-align: middle;">
                                            <a href="#" title="Edit" class="btn bg-primary text-white"
                                                data-bs-toggle="modal" data-bs-target="#modal">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" title="Delete" class="btn bg-primary text-white"
                                                data-bs-toggle="modal" data-bs-target="#modalm"><i
                                                    class="fas fa-trash-alt"></i></a>


                                        </td>

                                    </tr>
                                    <tr class="table-primary">
                                        <th scope="row " style="vertical-align: middle;">2</th>

                                        <td class="text-center " style="vertical-align: middle;"><b>Hussein</b></td>
                                        <td>Cardiologist</td>
                                        <td class="text-justify " style="width: 350px;">I wouldn't recommend Dr Hussein.
                                            I found him to be rude as he lectured me about my lifestyle instead of
                                            listening to my concerns.</td>
                                        <td style="vertical-align: middle;">
                                            <a href="#" title="Edit" class="btn bg-primary text-white"
                                                data-bs-toggle="modal" data-bs-target="#modal">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" title="Delete" class="btn bg-primary text-white"
                                                data-bs-toggle="modal" data-bs-target="#modalm"><i
                                                    class="fas fa-trash-alt"></i></a>


                                        </td>

                                    </tr>

                                    <tr>
                                        <th scope="row " style="vertical-align: middle;">3</th>

                                        <td class="text-center " style="vertical-align: middle;"><b>Joya</b></td>
                                        <td>Neurologist</td>
                                        <td class="text-justify " style="width: 350px;">I highly recommend Dr.Joya. She
                                            is skilled and caring doctor who keeps up with latest research to ensure his
                                            patients receive the best treatment.</td>
                                        <td style="vertical-align: middle;">
                                            <a href="#" title="Edit" class="btn bg-primary text-white"
                                                data-bs-toggle="modal" data-bs-target="#modal">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" title="Delete" class="btn bg-primary text-white"
                                                data-bs-toggle="modal" data-bs-target="#modalm"><i
                                                    class="fas fa-trash-alt"></i></a>

                                        </td>

                                    </tr>


                                    <tr class="table-primary">
                                        <th scope="row" style="vertical-align: middle;">4</th>
                                        <td class="text-center" style="vertical-align: middle;"><b>Hassan</b></td>
                                        <td>Cosmetic</td>
                                        <td class="text-justify " style="width: 350px;">I had a terrible experience with
                                            Dr.Hassan He misdiagnosed my condition and prescribed the wrong medicine. I
                                            felt he was rushing through the appointment rather than listening to my
                                            concerns</td>
                                        <td style="vertical-align: middle;">
                                            <a href="#" title="Edit" class="btn bg-primary text-white"
                                                data-bs-toggle="modal" data-bs-target="#modal">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" title="Delete" class="btn bg-primary text-white"
                                                data-bs-toggle="modal" data-bs-target="#modalm"><i
                                                    class="fas fa-trash-alt"></i></a>

                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel">Edit Your Feedback</h5>
                                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <label class="form-group">Feedback</label>
                                <input type="text" id="feedbackinput" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalm" tabindex="-1" aria-labelledby="modalmLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalmLabel">Delete Your feedback</h5>
                                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p> Are You Sure You Want To Delete It ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">yes</button>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span><i>
                                <script>document.write(new Date().getFullYear())</script> © <a class="text-primary"
                                    href="#">BookMyCare</a>
                            </i></span>
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
    
    <script>
//         // Wait for the DOM to be ready
// document.addEventListener("DOMContentLoaded", function() {
//   // Get the save button element
//   var saveButton = document.querySelector("#modal .modal-footer .btn-primary");

//   // Get the feedback input element
//   var feedbackInput = document.getElementById("feedbackinput");

//   // Add click event listener to the save button
//   saveButton.addEventListener("click", function(event) {
//     // Check if the feedback input is empty
//     if (feedbackInput.value.trim() === "") {
//       // Prevent the default button behavior
//       event.preventDefault();

//       // Display an error message or perform any other action
//       alert("Please enter your feedback before saving.");
//     } else {
//       // The feedback input is not empty, perform the save action here

//       // Close the modal
//       var modal = bootstrap.Modal.getInstance(document.getElementById("modal"));
//       modal.hide();
//     }
//   });
// });

    </script>

</body>

</html>