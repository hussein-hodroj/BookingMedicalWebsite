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

    <title>BookMyCare2</title>
    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


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
                <a class="nav-link" href="dashboard.php">
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
                <a class="nav-link" href="updateprof.php">
                    <i class="fas fa-user-edit"></i>
                    <span>Update Profile</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard-editpassword.php">
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
            <li class="nav-item active">
                <a class="nav-link" href="dashboard -gov.php">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Governorate</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="major.php">
                    <i class="fas fa-clinic-medical"></i>
                    <span>Major Doctor</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="doctorconf.php">
                    <i class="far fa-check-circle"></i>
                    <span>Confirmation</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="feedback.php">
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
                    <h3>Welcome <?php echo $name;?></h3>

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
                                <i class="fas fa-sign-out-alt" style='font-size:110%'></i>
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
                        <h1 class="h3 mb-0 text-gray-800">Governorate</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><a href="#">Governorate</a></li>
                        </ol>
                    </div>

                    <!-- Content Row -->
                    <!-- <div class="row">
                        
                    </div> -->

                    <div class="row g-0 ">
                       
                    <div class="col-12 d-flex justify-content-end align-items-end pb-3">
                        <a href="#" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#modalh" name="addgov">
                            <i class="fas fa-plus-square"></i>
                            Add Gov
                        </a>
                    </div>

                    </div>
                    <div class="row  d-flex justify-content-center align-items-center">
                        <div class="col-lg-12">
                            <table class="table text-center table-striped  table-bordered rad" style="box-shadow: 0 0 10px 0 rgba(24, 117, 216, 0.5);border-top: solid rgb(83, 158, 245)">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Governorate</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                
                                <tbody >
                                <?php
$sql = "SELECT * FROM `governorate`";
$result = mysqli_query($conn, $sql);
if ($result) {
    $count=0;
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $govname = $row['govname'];
        echo '<tr>
            <th scope="row">' .++$count. '</th>
            <td>' . $govname . '</td>
            <td>
            <button class="btn btn-primary editbtn" data-id="' . $id . '">Edit</button>
            <button class="btn btn-danger btnDelete" data-id="' . $id . '">Delete</button>
            </td>
        </tr>';
    }
}
?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="modal fade" id="modalh" tabindex="-1" aria-labelledby="modalhLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">Add</h5>
                                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>    
                                </div>
                                
                                <div class="modal-body">
                                <form action="addgov.php" method="POST"> <!-- Added form element with action and method attributes -->
                                    <label for="newGovernorate">New Governorate</label>
                                    <input type="text" name="newgov" class="form-control" id="modalhtext" placeholder="Add gov">
                                
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="saveadd">Save</button> <!-- Changed type to "submit" -->
                                    </div>
                                </form>
                            </div>

                            </div>
                        </div>
                    </div>


                   <!-- Modal for each row -->
                   <div class="modal fade editmodalopen" id="editModal-<?php echo $id; ?>" tabindex="-1" aria-labelledby="editModalLabel-<?php echo $id; ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel-<?php echo $id; ?>">Edit</h5>
                                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </div>
                                <div class="modal-body">
                                <form id="editForm-' . $id . '" method="POST" action="editgov.php?editeid=' . $id . '">
                                        <input type="text" id="txtId" name="txtID" hidden>
                                        <label>Governorate:</label>
                                        <input type="text" class="form-control" name="govname">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="saveedite">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---------------------------- DeleteModal ------------------------------------------->
                    <div class="modal fade" id="modalm" tabindex="-1" aria-labelledby="modalmLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalmLabel">Delete</h5>
                                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>    
                                </div>
                                <div class="modal-body">
                                    <p> Are You Sure You Want To Delete It ?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="deletegov.php" method="POST">
                                    <input type="text" name="txtDel" id="txtDelete" hidden>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Yes</button>
                                    </form>
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
                        <span><i>
                                <script>document.write(new Date().getFullYear())</script> &copy; <a class="text-primary"
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
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
<script>
    $(document).ready(function() {
        // Add event listener to the "Save" button in the "Add" modal
        $("#modalh .btn-primary").click(function() {
            // Reset previous error messages
            $("#modalhtext").removeClass("is-invalid");
            $("#modalh .error-message").remove();

            // Validate the input value
            var newGovernorate = $("#modalhtext").val().trim();
            if (newGovernorate === "") {
                $("#modalhtext").addClass("is-invalid");
                $("<div class='text-danger error-message'>Please enter a value.</div>").insertAfter("#modalhtext");
                return; // Stop execution if validation fails
            }

            // If validation passes, proceed with saving the data
            // ...
        });

        // Add event listener to the "Save" button in the "Edit" modal
        $("#modal .btn-primary").click(function() {
            // Reset previous error messages
            $("#modaltext").removeClass("is-invalid");
            $("#modal .error-message").remove();

            // Validate the input value
            var governorate = $("#modaltext").val().trim();
            if (governorate === "") {
                $("#modaltext").addClass("is-invalid");
                $("<div class='text-danger error-message'>Please enter a value.</div>").insertAfter("#modaltext");
                return; // Stop execution if validation fails
            }

            // If validation passes, proceed with saving the data
            // ...
        });

        $('.editbtn').click(function() {
            var id = $(this).data('id');
            $("#txtId").val(id);
            $('.editmodalopen').modal('show');
        });
        $('.btnDelete').click(function() {
            var idDel = $(this).data('id');
            $("#txtDelete").val(idDel);
            $('#modalm').modal('show');
        });
        $('.btn-close').click(function() {
            var id = $(this).closest('.modal').attr('id').split('-')[1];
            // <?php
            // include 'connect.php';
            // $sql="SELECT * FROM governorate WHERE id=$id";
            // $result=mysqli_query($conn,$sql);
            // ?>
            $('#editModal-' + id).modal('hide');
        });
    });
</script>

</html>