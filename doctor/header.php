<?php
            session_start();

            include("config.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>Caremed - How It Works</title>

	<meta name="keywords" content="Caremed HTML5 Responsive Template Medicine COVID-19 Corona Hospital" />
	<meta name="description" content="Caremed - Hospital HTML5 Responsive Template">
		
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
	
	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/plugins/datepicker.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="assets/css/style.min.css">
	<link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    
	
</head>
<body> 	
    <!------------------------------------------------
	loading overlay - start
	------------------------------------------------>

	<!------------------------------------------------
	loading overlay - end
	------------------------------------------------>
    <div class="page-wrapper">
        <!------------------------------------------------
		navigation - start
		------------------------------------------------>
		<header class="header">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="header-left">
                        <ul class="top-menu top-link-menu">
                            <li><a href="tel:#" class="link-phone"><i class="fas fa-phone"></i>(800) 388 4455</a></li>
                            <li><a href="#" class="link-email"><i class="fas fa-envelope-open"></i>contact@medcare.com</a></li>
                        </ul>
                    </div>
                    <div class="header-right">
                    <ul class="top-menu">
                            <li><a href="https://twitter.com/" class="social-link" onclick="window.open('https://twitter.com/'); return false;"><i class="fab fa-twitter"></i>Twitter</a></li>
                            <li><a href="https://www.facebook.com/" class="social-link" onclick="window.open('https://www.facebook.com/'); return false;"><i class="fab fa-facebook"></i>Facebook</a></li>
                            <li><a href="https://www.youtube.com/" class="social-link" onclick="window.open('https://www.youtube.com/'); return false;"><i class="fab fa-youtube"></i>Youtube</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="header-middle sticky-header">
                <div class="header-left">
                    <a href="index.php" class="logo">
                        <h1 class="mb-0"><img src="assets/images/logo.png" alt="Caremed Logo" width="185" height="48"></h1>
                    </a>
                </div>
                <div class="header-right">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="fal fa-bars"></i>
                    </button>
                    <nav class="main-nav ls-20">
                        <ul class="menu sf-arrows">
                        <li>
                                <a href="index.php" class="sf-with-ul">Home<i class=""></i></a>
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Doctor<i class="fas fa-caret-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="doctors.php"><i class="fas fa-angle-right"></i>All Doctor</a></li>
									<li><a href="finddoctor.php"><i class="fas fa-angle-right"></i>Find a Doctor</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="departments-1.php">Department</a>
                            </li>
                            <li>
                                <a href="treatments.php">Treatments</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="about.php">About Us</a>   
                            </li>
<li>
                                <a href="#" class="sf-with-ul btn mt-0"><span>  <?php
           
                echo "Welcome " . $_SESSION['dname'];
            
        ?></span><i class="fas fa-caret-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="doc_profile.php"><i class="fas fa-angle-right"></i>My Profile</a></li>
                                    <li><a href="viewappointment.php"><i class="fas fa-angle-right"></i>View Appointment</a></li>
                                <li><a href="signout.php"><i class="fas fa-angle-right"></i>Logout</a></li>
                                </ul>
                            </li>  </ul><!-- End .menu -->
                    </nav>
<!-- End .main-nav -->
                    <!-- <a href="login.php" class="btn btn-sm btn-secondary-color ls-0 btn-login">
						<span>Sign in</span>
					</a> -->
            </div>
                </div>
            </div>
        </header>
		<!------------------------------------------------
		navigation - end
		------------------------------------------------>
