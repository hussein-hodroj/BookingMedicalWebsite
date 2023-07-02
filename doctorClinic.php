<?php
require_once 'connect.php';
session_start();
$id = $_SESSION['id'];
$name = $_SESSION['fullName'];

$sql = "SELECT c.id, c.clinicname, c.phone, g.govname, d.majorName, c.clinicFullAddress
FROM clinic AS c
JOIN governorate AS g ON c.clinicGovid = g.id
JOIN doctormajor AS d ON c.clinicMajorid = d.id
WHERE c.doctorid = '{$id}'
GROUP BY c.id";

$result = mysqli_query($conn, $sql);

if ($result) {
    $clinic = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $clinic[]=$row;
    }

    $_SESSION['clinic'] = $clinic;
    mysqli_free_result($result);
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
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 d-flex justify-content-end align-items-end">

                <a href="doctorAddClinic.php" title="Add" class="btn bg-primary text-white mb-3">
                    <i class="fas fa-plus-square"></i>
                    Add clinic
                </a>
            </div>
        </div>
        <?php
        $clinic = $_SESSION['clinic'];

        foreach ($clinic as $row) {
            $clinicId= $row['id'];
            $sq = "SELECT MIN(id), weekday, timefrom, timeto FROM schedule
            WHERE clinicid = '{$clinicId}' 
            GROUP BY weekday
            ORDER BY id ASC ";

            $stmt = mysqli_prepare($conn, $sq);
            if ($stmt) {
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $id,  $weekday, $timefrom, $timeto);
                $clinics = array();
                while (mysqli_stmt_fetch($stmt)) {
                    $clinics[] = array(
                        'id' => $id,
                        'weekdays' =>  $weekday,
                        'timefrom' =>  $timefrom,
                        'timeto' =>  $timeto
                    );
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "Error: " . mysqli_error($conn);
            }

        ?>
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card" style="box-shadow: 0 0 10px 0 rgba(24, 117, 216, 0.5);border-top: solid rgb(83, 158, 245) ">

                    <div class="card-header ">
                        <div class="row ">
                            <div class="col-lg-12 d-flex justify-content-end align-items-end ">
                            <a href="#" title="Edit" class="btn btn-primary text-white" data-bs-toggle="modal"
    data-bs-target="#modal" style="margin-right: 8px;"
    data-id="<?php echo $row['id']; ?>">

    
    <i class="fas fa-edit"></i>
</a>

                                </a>
                                <a href="#" title="Delete" class="btn btn-danger text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalm" data-id="<?php echo $row['id']; ?>">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                               
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-group mb-2">Clinic Name </label>
                                <input type="text" class="form-control mb-3" id="text" disabled
                                name ="name" value="<?php echo $row['clinicname']; ?>" >
                            </div>
                            <div class="col-6">
                                <label class="form-group mb-2"> Clinic Phone Number </label>
                                <input type="text" class="form-control mb-3" id="text" disabled
                                name="phone" value="<?php echo $row['phone'];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="form-group mb-2"> Governorate </label>
                                <input type="text" class="form-control mb-3" id="text" disabled
                                name="governorate"  value="<?php echo $row['govname'];?>">
                            </div>
                            <div class="col-6">
                                <label class="form-group mb-2"> Major </label>
                                <input type="text" class="form-control mb-3" id="text" disabled
                                name="major" value="<?php echo $row['majorName'];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label mb-2"> Full Address </label>
                                <input type="text" class="form-control mb-3" id="text" disabled
                                 name="address"  value="<?php echo $row['clinicFullAddress'];?>">
                            </div>      
                        </div>
                       
                        <!-------------------- ManageSchedule------------------------- -->
                        <div class="row">
                            <div class="col-lg-6 " style="padding-top: 25px; padding-bottom: 35px;">
                            <h5 class="border text-primary" style="display: flex; align-items: center; padding-left: 12px; 
                            border-style: solid; border-radius: 10px; height: 40px;"> 
                                Manage Schedule: </h5>                            
                            </div>
                            <div class="col-lg-3 " style="padding-top: 25px; padding-bottom: 35px;">
                            <button type="submit" title="Edit" class="btn btn-primary text-white"
                            data-bs-toggle="modal" data-bs-target="#modalop"
                            data-id="<?php echo $row ['id'];?>" >Edit</button>
                            </div>
                            
                            <div class="col-lg-3 " style="padding-top: 25px; padding-bottom: 35px;">
                            <form action="doctor/resetschedule.php" method="POST">
                            <input type="hidden" name="updateid" value="<?php echo $row ['id']; ?>">
                            <button type="submit" title="Reset" name="reset" class="btn btn-success text-white"
                            data-id="<?php echo $row ['id'];?>">Reset</button>
        </div>
                    </form>
                            
                          
               </div>
                <div class="row">
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
    <tbody>


    <?php foreach ($clinics as $clinic) { ?>
        <tr>
            <td><?php echo  $clinic['weekdays']; ?></td>
            <td><?php echo $clinic['timefrom']; ?></td>
            <td><?php echo  $clinic['timeto']; ?></td>
        </tr>
    <?php } ?>
    </tbody>

</table>
                    </div>
                </div>
                </div>
                </div></div></div></div>
                <?php
                    }
                    ?>
              
    </div>
    <?php
        $clinic = $_SESSION['clinic'];

        foreach ($clinic as $row) {?>
    <div class="modal fade" id="modal"  tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Edit Clinic Information</h5>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="doctor/editinputs.php" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-group mb-2">Clinic Name</label>
                            <input type="text" class="form-control" name="name" id="txtName"
                            value="<?php echo $row['clinicname'];?>"  placeholder="Add Your Clinic Name">
                        </div>
                        <div class="col-6">
                            <label class="form-group mb-2">Clinic Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="txtPhone"
                            value="<?php echo $row['phone'];?>"   placeholder="Add Your Clinic Phone Number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-group">Governorate</label>
                            <select class="form-control" name="governorate" id="txtGov">
                                <option selected disabled>Please select Governorate</option>
                                <?php
                                // Fetch governorate IDs and names from the governorate table
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
                        <div class="col-6">
                            <label class="form-group">Major</label>
                            <select class="form-control" name="major" id="txtMajor">
                                <option selected disabled>Please select your major</option>
                                <?php
                                // Fetch major IDs and names from the doctormajor table
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
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label mb-2">Full Address</label>
                            <input type="text" class="form-control" name="address" id="txtAddress"
                              value="<?php echo $row['clinicFullAddress'];?>"  placeholder="Add Your Clinic Address">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="hidden" name="updateid" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="edit" class="btn btn-primary" id="btnSave">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


            <div class="modal fade" id="modalm" tabindex="-1" aria-labelledby="modalmLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalmLabel">Delete Clinic</h5>
                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="doctor/deleteclinic.php" method="POST">
                        <p> Are you sure you want to delete this clinic?</p>
            </div>
            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="hidden" name="deleteid" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete" class="btn btn-danger" id="btnSave">Delete</button>
                        </div>
                    </div>
                            </form>
                </div>
            </div>
            <div class="modal fade" id="modalop" tabindex="-1" aria-labelledby="modalmLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modalmLabel">Edit schedule</h5>
                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="doctor/editschedule.php" method="POST">
                        <p> Edit clinic schedule </p>
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
            <?php $weekday = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']; ?>
            <?php for ($i = 0; $i < count($weekday); $i++): ?>
                <tr>
                    <td>
                        <?php echo $weekday[$i]; ?>
                        <input type="hidden" name="weekday<?php echo $i+1; ?>" value="<?php echo $weekday[$i]; ?>">
                    </td>
                    <td>
                    <input type="time" class="form-control" id="time" name="start<?php echo $i+1; ?>">
                    </td>
                    <td>
                    <input type="time" class="form-control" id="time" name="end<?php echo $i+1; ?>">                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
        </table>
    </div>
</div>
            </div>
            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="hidden" name="deleteid" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="save" class="btn btn-danger" id="btnSave">Save</button>
                        </div>
                    </div>
                            </form>
                            </div>
                            </div>
            <?php
                    }
                    ?>

            
  </div>
    </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
            </div>
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