<?php 

    include("admin/config.php");

    if(isset($_POST['btnsub'])) {
        $name = $_POST['username'];
        $email = $_POST['useremail'];
        $pass = $_POST['userpass'];
        
        // Hash the password
       

        $query = "INSERT INTO user(user_name, user_email, user_pass)
        VALUES ('".$name."', '".$email."', '".$pass."')";

        $result = mysqli_query($conn, $query);
        if($result){
         
            echo "<script>alert('Registration successful')</script>";
        } else {
            echo "<script>alert('Registration failed')</script>";
        }
    }
    else{
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>Caremed - Signup</title>

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
    <style>
.bgcolour{
		background-color: #F0F8FF;
        background-image: url(assets/images/demos/demo-1/banner/banner-big-fore.png);
    background-size: 660px;
    background-position: right -20px top 150px;
    
	}

    </style>
    <!------------------------------------------------
	loading overlay - start
	------------------------------------------------>
	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!------------------------------------------------
	loading overlay - end
	------------------------------------------------>
    <div class="page-wrapper">
        <!------------------------------------------------
	    navigation - start
	    ------------------------------------------------>
        <main class="main">
            <!------------------------------------------------
	        signup - start
	        ------------------------------------------------>
            <!-- 
                background image is added through css and can be modified in the _sections.scss file
                the image is added to the .bg-section-18 class.
            -->
            <div class="height-100vh login-section signup-section position-relative bg-section bgcolour">
                <form class="sign-form" method="post">
                    <div class="form-heading text-center">
                        <h4 class="sub-title ls-n-20 line-height-1 mb-3">Create Profile.</h4>
                        <span class="heading-desc">
                            Join over 1 million people on Caremed.
                        </span>
                    </div>
                    <div class="form-content">
                        <div class="input-group input-light">
                            <h6 class="input-title">Email</h6>
                            <input type="email" class="form-control" name="uemail" placeholder="example@gmail.com" required>
                        </div>
                        <div class="input-group input-light">
                            <h6 class="input-title">Date of Birth</h6>
                            <input type="text" class="form-control" name="dateofbirth" placeholder="mm/dd/yy" required>
                        </div>
                        <div class="input-group input-light">
                            <h6 class="input-title">Password</h6>
                            <input type="password" name="upass" class="form-control" required>
                        </div>
                        <!-- <div class="input-group input-light input-check term-privacy mt-2">
                            <input type="checkbox" class="custom-control-input" id="terms">
                            <label class="custom-control-label" for="terms">
                                I agree to
                                <a href="#">Terms of Use</a>
                                and
                                <a href="#">Privacy Policy</a>
                            </label>
                        </div> -->
                        <button type="submit" class="btn btn-form btn-secondary-color" name="btnsub">
                            <span>Create Profile</span>
                        </button>
                        <div class="term-privacy d-flex justify-content-center">
                            <span class="line-height-1">Already have an account?</span><a class="line-height-1" href="signin.php">Sign in</a>
                        </div>
                    </div>
                </form>
                <div class="foreground-img">
					<img src="assets/images/backgrounds/background-2-fore.png" alt="image">					
				</div>
            </div>
            <!------------------------------------------------
	        signup - end
	        ------------------------------------------------>
        </main>
    </div>
        <!-- Plugins JS File -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/plugins/owl.carousel.min.js"></script>
        <script src="assets/js/plugins/datepicker.min.js"></script>
        <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/plugins/isotope.pkgd.min.js"></script>

        
        <!-- Main JS File -->
        <script src="assets/js/main.min.js"></script>
    
</body>
</html>