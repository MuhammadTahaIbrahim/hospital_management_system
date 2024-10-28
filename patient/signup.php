<?php
include("config.php");

if(isset($_POST['btnsub'])) {
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $date = $_POST['dateofbirth']; // Fixed variable name
    $pass = $_POST['upass'];

    // Check if the email already exists
    $check_query = "SELECT * FROM user WHERE user_email = '$email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // Email already exists, show an error message or redirect to registration page
        echo "<script>alert('Email already exists. Please choose another email.');</script>";
    } else {
        // Insert the new user if the email is unique
        $insert_query = "INSERT INTO user (user_name, user_email, user_date, user_pass) VALUES ('".$name."', '".$email."', '".$date."', '".$pass."')";
        $insert_result = mysqli_query($conn, $insert_query);

        if ($insert_result) {
            echo "<script>alert('User registered successfully!');</script>";
        } else {
            echo "<script>alert('Error registering user.');</script>";
        }
    }

}
?>
<?php
if (isset($_POST['regsub'])) {
    $reguemail = $_POST['email'];
    $regupass = $_POST['password'];

    // Check if the email already exists
    $check_query = "SELECT * FROM user WHERE user_email = '$reguemail'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // Email already exists, show an error message or redirect to registration page
        echo "Email already exists. Please choose another email.";
    } else {
        // Insert the new user if the email is unique
        $insert_query = "INSERT INTO user (user_email, user_pass) VALUES ('$reguemail', '$regupass')";
        $insert_result = mysqli_query($conn, $insert_query);

        if ($insert_result) {
            echo "User registered successfully!";
        } else {
            echo "Error registering user.";
        }
    }
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
            <div class="height-100vh login-section signup-section position-relative bg-section bg-section-18">
                <form class="sign-form mt-5" method="post">
                    <div class="form-heading text-center">
                        <h4 class="sub-title ls-n-20 line-height-1 mt-1 mb-0">Create Profile.</h4>
                    </div>
                    <div class="form-content">
                    <div class="input-group input-light">
                            <h6 class="input-title">Name</h6>
                            <input type="text" class="form-control" name="uname" placeholder="" required>
                        </div>
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
					<img src="/assets/images/backgrounds/background-2.jpg" class="img-fluid" alt="image">					
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