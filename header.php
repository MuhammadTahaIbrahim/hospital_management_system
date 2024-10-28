<?php
            session_start();
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                            <!-- <li>
                                <a href="#" class="sf-with-ul">Pages<i class="fas fa-caret-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="about.php"><i class="fas fa-angle-right"></i>About us</a></li>
                                    <li class="li-with-arrow">
                                        <a href="doctors.php"><i class="fas fa-angle-right"></i>Our Doctors<i class="far fa-caret-right"></i></a>
                                        <ul>
                                            <li><a href="doctors.php"><i class="fas fa-angle-right"></i>Our Doctors</a></li>
                                            <li><a href="finddoctor.php"><i class="fas fa-angle-right"></i>Find A Doctor</a></li>
                                            <li><a href="doctors-detailed.php"><i class="fas fa-angle-right"></i>Doctor (Detailed)</a></li>
                                        </ul>
                                    </li>
                                    <li class="li-with-arrow">
                                            <a href="departments-1.php"><i class="fas fa-angle-right"></i>Departments<i class="far fa-caret-right"></i></a>
                                            <ul>
                                                <li><a href="departments-1.php"><i class="fas fa-angle-right"></i>Departments Style 1</a></li>
                                                <li><a href="departments-2.php"><i class="fas fa-angle-right"></i>Departments Style 2</a></li>
                                                <li><a href="departments-detailed.php"><i class="fas fa-angle-right"></i>Department details</a></li>
                                            </ul>
                                        </li>
                                    <li class="li-with-arrow">
                                        <a href="blog-masonry.php"><i class="fas fa-angle-right"></i>Our Blog<i class="far fa-caret-right"></i></a>
                                        <ul>
                                            <li><a href="blog-masonry.php"><i class="fas fa-angle-right"></i>Blog Masonry</a></li>
                                            <li><a href="blog-right-sidebar.php"><i class="fas fa-angle-right"></i>Blog Masonry (right sidebar)</a></li>
                                            <li><a href="blog-left-sidebar.php"><i class="fas fa-angle-right"></i>Blog Masonry (left sidebar)</a></li>
                                            <li><a href="blog-detailed.php"><i class="fas fa-angle-right"></i>Blog Detailed</a></li>
                                            <li><a href="blog-detailed-sidebar.php"><i class="fas fa-angle-right"></i>Blog Detailed (Sidebar)</a></li>
                                        </ul>
                                    </li>
									<li class="li-with-arrow">
                                        <a href="appointment-step1.php"><i class="fas fa-angle-right"></i>Appointments<i class="far fa-caret-right"></i></a>
                                        <ul>
                                            <li><a href="appointment-step1.php"><i class="fas fa-angle-right"></i>Appointment 1</a></li>
                                            <li><a href="appointment-step2.php"><i class="fas fa-angle-right"></i>Appointment 2</a></li>
                                            <li><a href="appointment-step3.php"><i class="fas fa-angle-right"></i>Appointment 3</a></li>
                                            <li><a href="appointment-step4.php"><i class="fas fa-angle-right"></i>Appointment 4</a></li>
                                        </ul>
                                    </li>
									<li class="li-with-arrow"><a href="help.php"><i class="fas fa-angle-right"></i>Help</a>
										<ul>
                                            <li><a href="help.php"><i class="fas fa-angle-right"></i>Help</a></li>
                                            <li><a href="help-questions.php"><i class="fas fa-angle-right"></i>Help Questions</a></li>
                                        </ul>
									</li>
                                    <li><a href="reviews.php"><i class="fas fa-angle-right"></i>Reviews</a></li>
									<li><a href="contact-us.php"><i class="fas fa-angle-right"></i>Contact us</a></li>
                                </ul>
                            </li> -->
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
                            <!-- <li>
                                <a href="about.php">Contact Us</a>
                            </li> -->
                            <!-- <li>
                                <a href="help.php">Help</a>
                                </li> -->
                                <li>
                                <a href="#" class="sf-with-ul btn mt-0"><span>Sign In</span><i class="fas fa-caret-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="patient/signin.php"><i class="fas fa-angle-right"></i>Patient Signin</a></li>
                                    <li><a href="doctor/signin.php"><i class="fas fa-angle-right"></i>Doctor Sign In</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .menu -->
                    </nav>
<!-- End .main-nav -->
                    <!-- <div class="header-search">
                        <a href="#" class="search-toggle" role="button"><i class="fas fa-search"></i></a>
                        <form action="#" class="header-search-wrapper">
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required="">
                            <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
                        </form>
                    </div>                  -->
                    <a href="appointment-step1.php" class="btn btn-sm btn-primary-color ls-0">
						<span>Book an Appointment</span>
					</a>
                    <!-- <a href="contactus.php" class="" role="button"><i class="fal fa-notes-medical"></i></a>    -->
                    <!-- <a href="appointment-step1.php" class="icon-alt"><i class="fal fa-notes-medical"></i></a> -->
                    <!-- <a href="login.php" class="btn btn-sm btn-secondary-color ls-0 btn-login">
						<span>Sign in</span> -->
					</a>
            </div>
                </div>
            </div>
        </header>
		<!------------------------------------------------
		navigation - end
		------------------------------------------------>
