<?php 
    include 'connect.php'
    

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>BookMyCare</title>

	<!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script>

      $(document).ready(function(){

        // remove fragment as much as it can go without adding an entry in browser history:
        window.location.replace("#");
        // slice off the remaining '#' in HTML5:    
        if (typeof window.history.replaceState == 'function') {
          history.replaceState({}, '', window.location.href.slice(0, -1));
        }

          $("a").click(function() {
              $("a").removeClass("active");
              $(this).addClass("active");
          });
  

  </script>
</head>
<body id="home">
	<!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <!-- <h1 class="m-0 d-flex">
                        <img src="img/logo.png" class="mb-2 d-none d-xl-block">BookMyCare</h1> -->
                        <img src="img/logotitle.jpg" style="width:90%; height: 90%;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#services" class="nav-item nav-link">Services</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome</h1>
      <h1> to BookMyCare</h1>
      <h2>Find the Good Life With Good Health</h2>
      <a href="register.html" class="btn-SignUp">SignUp</a> &nbsp;&nbsp;
      <a href="login.html" class="btn-LogIn">LogIn <i class="fa fa-sign-in"></i></a>
    </div>
  </section><!-- End Hero -->


  <!-- About Start -->
  <section id="about">
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/sl4.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">About Us</h5>
                        <h1 class="display-4">Best Medical Booking System For Care Yourself</h1>
                    </div>
                    <p style="text-align: justify;">We recognized that patients and clients want a simple booking system that has as many real-time doctors’ availability as possible to schedule an appointment online, so we decided to search for the best solution.<b> BookMyCare</b> can make it easier, you can safely use our booking and scheduling system to let patients book their appointments online.</p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0">Qualified<small class="d-block text-primary">Doctors</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                <h6 class="mb-0">Emergency<small class="d-block text-primary">Services</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                <h6 class="mb-0">Accurate<small class="d-block text-primary">Testing</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-clinic-medical text-primary mb-3"></i>
                                <h6 class="mb-0">Online<small class="d-block text-primary">Services</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- About End -->

     <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts" action="patientnumber.php">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i> 
              <h5 > 
                    <?php 
                          include 'doctornumber.php';
                    ?> 
              </h5>
            </div>
          </div> 

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <h5 >
                    <?php 
                                include 'clinicnumber.php';
                    ?>
              </h5>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-procedures"></i>
              <h5 > 
                    <?php 
                          include 'patientnumber.php';
                    ?> 
              </h5>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-laptop-medical"></i>
              <h5 > 
                    <?php 
                          include 'appointmentnumnber.php';
                    ?> 
              </h5>
            </div>
          </div>

        </div>

      </div>
    </section>
<!-- End Counts Section -->

<!-- Services Section -->
  <section id="services">
  <div class="container py-5">
  	<div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-3">Services</h5>
                <h1 class="display-4">Online Medical Services</h1>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="card border-0 shadow-sm shadow-primary rounded-3">
          <div class="card-body text-center">
            <i class="bi bi-calendar2-check h1 text-primary mb-3"></i>
            <h3 class="fw-bold">Book Appointments</h3>
            <p class="text-muted">Easily book appointments online with our user-friendly booking system.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-4">
        <div class="card border-0 shadow-sm rounded-3">
          <div class="card-body text-center">
            <i class="bi bi-chat-left-dots h1 text-primary mb-3"></i>
            <h3 class="fw-bold">Consultations</h3>
            <p class="text-muted">Easily schedule online consultations with our professional doctors.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Services Section -->

<!-- chatbot-->


<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
      	<div class="row">
      		<div class="col-lg-4 my-4">
      			<h5 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-3">Contact</h5>
      			<p>Want to get in touch? We'd love to hear from you.</p>
      			<p> Here's how you can reach us:</p>
                <div class="email">
                <h5><i class="bi bi-envelope"></i> Email: BookMyCare@email.com</h5>
                
                
              </div>
      		</div>
      		<div class="col-lg-8  my-4">
            <!-- contact.php???? -->
          <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> -->
          <!-- action="sendEmail.php"  -->
            <form  method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="d-flex justify-content-end pt-3">
                  <button type="submit" id="submit" class="btn ms-2" style="background-color:#0077b6; color:#fff">Send Message</button>
                </div>
            </form>

          </div>
      	</div>
<br>
      </div>
    </section>
<!-- End Contact Section -->

<!-- ======= Footer ======= -->
<!-- <footer class="shadow-lg rounded" style="background-color:#fff;">
<div class="container-fluid text-light border-top py-4 ">
        <div class="container mt-auto" >
            <div class="row g-5">
                <div class="col text-center">
                   <i> <h6 style="color:#2c4964;"><script>document.write(new Date().getFullYear())</script> &copy; BookMyCare</h6></i>
                </div>
            </div>
        </div>
    </div>
</footer> -->
<!-- ======= End Footer ======= -->

 <div class="container-fluid bg-dark text-light">
        <div class="container py-5">
            <div class="row g-6 ms-5">
                <div class="col-lg-5 col-md-6 pb-3 ">
                    <h4 class="d-inline-block text-light text-uppercase border-bottom border-5 border-secondary mb-4">Get In Touch</h4>
                    <!-- <p class="mb-4">Our support team is spread across the glob to give your answers fast.</p> -->
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Lebanon</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>BookMyCare@email.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+961 76753130</p>
                </div>
                <div class="col-lg-4 col-md-6 pb-3">
                    <h4 class="d-inline-block text-light text-uppercase border-bottom border-5 border-secondary mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#home"><i class="fa fa-angle-right me-2 text-primary"></i>Home</a> 
                        <a class="text-light mb-2" href="#about"><i class="fa fa-angle-right me-2 text-primary"></i>About Us</a>
                        <a class="text-light mb-2" href="#services"><i class="fa fa-angle-right me-2 text-primary"></i>Our Services</a>
                        <a class="text-light" href="#contact"><i class="fa fa-angle-right me-2 text-primary"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <h4 class="d-inline-block text-light text-uppercase border-bottom border-5 border-secondary mb-4">Follow Us</h4>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-3">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                   <i> <p class="mb-md-0"><script>document.write(new Date().getFullYear())</script> &copy; <a class="text-primary" href="#">BookMyCare</a></p></i>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- <script>
    $(document).ready(function() {
        // Make an AJAX request to patientnumber.php
        $.ajax({
            url: "patientnumber.php",
            method: "GET",
            dataType: "json",
            success: function(data) {
                // Display the appointment count
                $('$appointmentCount').text("Number of Appointments: " + data.appointmentCount);
            },
            error: function() {
                console.log("Error occurred while retrieving appointment count.");
            }
        });
    });
    </script> -->
    
</html>