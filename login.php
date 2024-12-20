<!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>Caremed - Signin</title>

	<meta name="keywords" content="Caremed php5 Responsive Template Medicine COVID-19 Corona Hospital" />
	<meta name="description" content="Caremed - Hospital php5 Responsive Template">
		
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
        <header class="header header-sign">
            <div class="header-middle header-middle-simple">
                <div class="header-left">
                    <a href="index.php" class="logo">
                        <h1 class="mb-0"><img src="assets/images/logo.png" alt="Caremed Logo" width="185" height="48"></h1>
                    </a>
                </div>
            </div>
        </header>
        <!------------------------------------------------
	    navigation - end
	    ------------------------------------------------>
        <main class="main">
            <!------------------------------------------------
	        login - start
	        ------------------------------------------------>
            <!-- 
                background image is added through css and can be modified in the _sections.scss file
                the image is added to the .bg-section-17 class.
            -->
            <div class="height-100vh login-section position-relative bg-section bg-section-17">
                <form class="sign-form">
                    <div class="form-heading text-center">
                        <h4 class="sub-title ls-n-20 line-height-1 mb-2">Sign In.</h4>
                        <span class="heading-desc">
                            Sign in to your account below.
                        </span>
                    </div>
                    <div class="form-content">
                        <div class="input-group input-light">
                            <h6 class="input-title">Email</h6>
                            <input type="email" class="form-control" placeholder="example@gmail.com" required>
                        </div>
                        <div class="input-group input-light">
                            <h6 class="input-title">Password</h6>
                            <input type="password" class="form-control" required>
                        </div>
                        <div class="btn-link">
                            <a href="#">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-form btn-secondary-color">
                            <span>Continue</span>
                        </button>
                        <div class="term-privacy d-flex justify-content-center">
                            <span class="line-height-1">New to MedCare? </span>
                            <div class="btn-link">
                                <a class="line-height-1" href="signup.php">Create Profile</a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="foreground-img">
					<img src="assets/images/backgrounds/background-1-fore.png" alt="image">					
				</div>
            </div>
            <!------------------------------------------------
	        login - end
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