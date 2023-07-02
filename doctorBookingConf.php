<?php
require_once 'connect.php';
session_start();
$name = $_SESSION['fullName'];

$sql = "SELECT b.id, b.patId AS patientId, u.fullName AS patientName,u.email, g.govname AS govName, u.address, b.booking 
        FROM booking AS b 
        JOIN user AS u ON u.id = b.patId 
        JOIN clinic AS c ON b.clinicId = c.id
        JOIN governorate AS g ON g.id = c.clinicGovid 
        WHERE b.statuss = 'pending'";

$stmt = mysqli_prepare($conn, $sql);
if ($stmt) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id,$patientId, $patientName,$email, $govName, $address, $booking);
    
    $bookings = array();
    
    while (mysqli_stmt_fetch($stmt)) {
        $bookings[] = array(
            'id' => $id,
            'patientName' => $patientName,
            'email' => $email,
            'govName' => $govName,
            'address' => $address,
            'booking' => $booking   
        );
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($conn);
}
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

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
            <li class="nav-item">
                <a class="nav-link" href="doctorClinic.php">
                    <i class="fas fa-clinic-medical"></i>
                    <span>Clinics</span></a>
            </li>

            <li class="nav-item active">
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
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

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
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->
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
                        <h1 class="h3 mb-0 text-gray-800">Confirmation</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><a href="#">Cofirmation</a></li>
                        </ol>
                    </div>


    <div class="container-fluid">
    
        <div class="row  ">
            <div class="col-lg-12">
                <table id="table" class="table table-striped table-light table-bordered border-primary" style="box-shadow: 0 0 10px 0 rgba(24, 117, 216, 0.5);border-top: solid rgb(83, 158, 245)">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Patient's Name</th>
                            <th scope="col">Patient's Email</th>
                            <th scope="col">Governorate</th>
                            <th scope="col">Address</th>
                            <th scope="col">Date and Time</th>
                            
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookings as $booking) : ?> 
                        <tr>
                            <th scope="row"><?php echo $booking['id'];?></th>
                            <td><?php echo $booking['patientName'];?></td>
                            <td><?php echo $booking['email'];?></td>
                            <td><?php echo $booking['govName'];?></td>
                            <td><?php echo $booking['address'];?></td>
                            <td><?php echo $booking['booking'];?></td>

                            <td> 
                                <a href="#" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalj"  data-email="<?php echo $booking['email'];?>"
                                    data-id="<?php echo $booking ['id']; ?>">
                                    <i class="fas fa-check"></i>
                                </a>
                               
                                <a href="#" class="btn bg-primary text-white" data-bs-toggle="modal"
                                 data-bs-target="#modalm"  data-id="<?php echo $booking['id']; ?>" 
                                 data-email="<?php echo $booking['email'];?>">
                                    <i class="fas fa-trash-alt"></i></a>
                            </td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="modalj" tabindex="-1" aria-labelledby="modaljLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Accept Appointment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="acceptForm" action="doctor/confirmationbook.php" method="POST">
                    <div class="modal-body">
                    <label class="form-group">Please specify the reason for rejection*</label>
                    <textarea class="form-control" id="reminder" name="reminder" aria-label="With textarea"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close</button>
                        <input type="hidden" name="updateid" value="<?php echo $booking ['id']; ?>">
                        <input type="hidden" id="emailInput" name="emailInput" value="<?php echo $booking['email'];?>">
                        <button type="submit" class="btn btn-primary" name="submit" id="send">Send</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
                                          if (isset($_GET["msg"])) {
                                            $msg = $_GET["msg"];
                                            echo '<div id="successMessage" class="alert alert-success alert-dismissible fade show mt-2" role="alert">' . $msg . '</div>';
                                        }?>
                                        <?php
                                          if (isset($_GET["msgemail"])) {
                                            $msg = $_GET["msgemail"];
                                            echo '<div id="successMessage" class="alert alert-danger alert-dismissible fade show mt-2" role="alert">' . $msg . '</div>';
                                        }?> 
                        
                                    
        <div class="modal fade" id="modalm" tabindex="-1" aria-labelledby="modalmLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalmLabel">Reject Appointment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="rejectForm" action="doctor/bookreject.php" method="POST">
                    <div class="modal-body">
                        <label class="form-group"> Reason For Rejecting This Appointment</label>
                        <textarea class="form-control" name="reject" id="rejectText" aria-label="With textarea"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="hidden" name="updateid" value="<?php echo $booking ['id']; ?>">
                        <input type="hidden" id="emailInput" name="emailInput" value="<?php echo $booking['email'];?>">
                        <button type="submit" class="btn btn-primary" name="submit" id="send">Send</button>
                        
                    </div>
                    </form>
                </div>
            </div>
            <?php
                                          if (isset($_GET["msg"])) {
                                            $msg = $_GET["msg"];
                                            echo '<div id="successMessage" class="alert alert-success alert-dismissible fade show mt-2" role="alert">' . $msg . '</div>';
                                        }?>
                                        <?php
                                          if (isset($_GET["msgemail"])) {
                                            $msg = $_GET["msgemail"];
                                            echo '<div id="successMessage" class="alert alert-danger alert-dismissible fade show mt-2" role="alert">' . $msg . '</div>';
                                        }?>    
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
  // Add event listener to the "Save" button in the "Delete" modal
  var saveButton = document.querySelector("#modalm .btn-primary");
  saveButton.addEventListener("click", function() {
    // Reset previous error messages
    var rejectText = document.querySelector("#rejectText");
    rejectText.classList.remove("is-invalid");
    var errorMessages = document.querySelectorAll("#modalm .error-message");
    errorMessages.forEach(function(errorMessage) {
      errorMessage.remove();
    });

    // Validate the input value
    var textR = rejectText.value.trim();
    if (textR === "") {
      rejectText.classList.add("is-invalid");
      var errorMessage = document.createElement("div");
      errorMessage.className = "text-danger error-message";
      errorMessage.textContent = "Please enter a value.";
      rejectText.parentNode.insertBefore(errorMessage, rejectText.nextSibling);
      return; // Stop execution if validation fails
    }

   
  });
});
</script>
<script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
    <script>
       $(document).ready(function() {
        $('#successMessage').show();
          setTimeout(function() {
            $('#successMessage').hide();
          }, 3000);
        });
    </script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<!-- this is the script -->
    <script>
            $( document ).ready(function() {
    $('#table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "iDisplayLength": 10,
    });
  }); 
  </script>
</body>

</html>