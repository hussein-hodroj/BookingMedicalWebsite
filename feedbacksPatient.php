<?php
require_once 'connect.php';
session_start();
$name = $_SESSION['fullName'];
$id=$_SESSION['id'];
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
       $(document).ready(function() {
        $('#successMessage').show();
          setTimeout(function() {
            $('#successMessage').hide();
          }, 3000);
        });
    </script>

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
                <a class="nav-link" href="#">
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
                        <h1 class="h3 mb-0 text-gray-800">Feedback</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Feedback</li>
                        </ol>
                    </div>
                    
                    <!-- Content Row -->
                    <div class="container d-flex justify-content-end">
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mymodelfeedback">Add Feedback</button>
                       <div class="modal" id="mymodelfeedback">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title">Add Feedback</h5>
                                       <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                           <span>&times;</span>
                                       </button>
                                   </div>
                                   <?php
                                   $query = "SELECT id, fullName FROM user WHERE roleid = 2";
                                   $result = mysqli_query($conn, $query);
                                   if ($result) {
                                       $options = '';
                                       while ($row = mysqli_fetch_assoc($result)) {
                                           $doctorId = $row['id'];
                                           $fullName = $row['fullName'];
                                           $options .= "<option value='$doctorId' required>$fullName</option>";
                                       }
                                   } else {
                                       $options = "<option disabled selected >No doctors available</option>";
                                   }
                                   
                                   ?>
                                   <div class="modal-body">
                                       <form action="./patientFeedback/insert_feedback.php" method="post">
                                           <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="doctorSelect" required>
                                               <option value="" selected disabled>Choose Your Doctor</option>
                                               <?php echo $options; ?>
                                           </select>
                                           <input type="hidden" name="patientId" value="<?php echo $id;?>">
                                           <div class="form-floating mt-4">
                                               <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="feedback" style="height: 100px" required></textarea>
                                               <label for="flatingTextarea2">New Feedback</label>
                                           </div>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                       <button type="submit" id="savefeedback" name="savefeedback" class="btn btn-primary">Save</button>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="row  justify-content-center mt-5">
                    <?php
            if (isset($_GET["msg"])) {
            $msg = $_GET["msg"];
            echo '<div id="successMessage" class="alert alert-success mt-2" role="alert">' . $msg . '</div>';
        }?>
        <?php
            if (isset($_GET["msgg"])) {
            $msg = $_GET["msgg"];
            echo '<div id="successMessage" class="alert alert-success mt-2" role="alert">' . $msg . '</div>';
        }?>
        <?php
            if (isset($_GET["msggg"])) {
            $msg = $_GET["msggg"];
            echo '<div id="successMessage" class="alert alert-danger mt-2" role="alert">' . $msg . '</div>';
        }?>
                        <div class="col-lg-12">

                            <table class="table text-center table-striped table-light table-bordered "
                                style="box-shadow: 0 0 10px 0 rgba(24, 117, 216, 0.5)">
                                <thead>
                                    <tr class="table-primary">

                                        <th scope="col ">#</th>
                                        <th scope="col">Dr Name</th>
                                        <th scope="col">Previous Feedback</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = "SELECT f.id, u.fullName AS doctorName, f.feedback
                                FROM feedback f
                                INNER JOIN user u ON f.doctorid = u.id
                                WHERE u.roleid = 2 AND f.patientid = $id";
                        $result = mysqli_query($conn, $sql);
                        
                        $count=0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row["id"];
                            $doctorName = $row["doctorName"];
                            $feedback = $row["feedback"];
                                 ?>
                                    <tr>
                                     <td><?php echo ++$count ?></td>
                                     <td class="text-center " style="vertical-align: middle;"><?php echo $row["doctorName"] ?></td>
                                        <td class="text-justify " style="width: 350px;"><?php echo $row["feedback"] ?> </td>
                                        <td>
                                     <a href="#edit_<?php echo $row["id"] ?>" class="btn bg-primary text-white btnEdit" data-bs-toggle="modal">
                                      <i class="fas fa-edit"></i></a>
                                     <a href="#delete_<?php echo $row["id"] ?>" title="Delete" class="btn bg-primary text-white btnDelete" data-bs-toggle="modal"><i
                                        class="fas fa-trash-alt"></i></a>
                                     </td>
                                     <div class="modal fade" id="edit_<?php echo $row['id']; ?>"tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                   <h5 class="modal-title" id="modalLabel">Edit Feedback</h5>
                                                   <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                   </button>
                                                               </div>
                                               <form action="./patientFeedback\edit_feedback.php?id=<?php echo $row['id']; ?>" method="POST">
                                               <div class="modal-body">
                                               <div class="form-floating mt-4">
                                               <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="feedback" style="height: 100px" required><?php echo $row['feedback']; ?></textarea>
                                               <label for="flatingTextarea2">Edit Feedback</label>
                                            </div>
                                        
                                               </div>
                                               <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                   <button type="submit" name="submit" class="btn btn-primary" >Save</button>
                                               </div>
                                               </form>
                                           </div>
                                       </div>
                                   </div>
                                     <div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="modalmLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="modalmLabel">Delete Feedback</h5>
                                          <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>         
                                       </div>
                                        <div class="modal-body">
                                          <p class="text-danger"> Are You Sure You Want To Delete ?</p>
                                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <a href="./patientFeedback\delete_feedback.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Yes</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                    </tr>
                                    <?php
                                       }
                                      ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                             
                    <!-- <div class="row">
                    </div> -->
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