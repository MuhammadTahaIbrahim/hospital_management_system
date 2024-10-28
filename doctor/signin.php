<?php 
include("config.php");
?>
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

  <!-- for doctor login -->
  
<?php
if(isset($_POST['logsub'])) 
{ 
        $loguemail = $_POST['dname'];
        $logupass = $_POST['dpass'];

    $query1 = "SELECT * FROM doctor WHERE doc_email = '".$loguemail."'";
    $result1 = mysqli_query($conn, $query1);
 
    $row = mysqli_fetch_array($result1);
     $doctorpass = $row['doc_pass'];
     $signname = $row['doc_name'];
     session_start();
     $_SESSION['dname']=$signname;
     
         
     if($loguemail == $row["doc_email"] && $logupass == $row["doc_pass"])
     {      
         session_start();
         header("Location:index.php");
         $_SESSION['did']=$row["doc_id"];
         $_SESSION['dname']=$row["doc_name"];

     }      
    }
//     if(isset($_POST['logsub'])) 
//     { 
//         $loguemail = $_POST['dname'];
//         $logupass = $_POST['dpass'];
//         $query = "SELECT * FROM doctor";
//         $result1 = mysqli_query($conn, $query);
        
//         $row = mysqli_fetch_array($result1);
         
//         if($loguemail == $row["doc_email"] && $logupass == $row["doc_pass"])
//         {      
//             session_start();
//             header("Location:index.php");
//             $_SESSION['dname']=$row["doc_name"];

//         }       

//         } 
    
// ?>
<style>
.bgcolour{
		background-color: #F0F8FF;
        background-image: url(../assets/images/demos/demo-1/banner/banner-big-2-fore.png);
    background-size: 600px;
    background-position: right -20px top;
    
	}

</style>
        <main class="main">
            <!------------------------------------------------
	        login - start
	        ------------------------------------------------>
            <div class="height-100vh login-section position-relative bg-section bgcolour">
                <form class="sign-form" method="post">
                    <div class="form-heading text-center">
                        <h4 class="sub-title ls-n-20 line-height-1 mb-2">Sign In.</h4>
                        <span class="heading-desc">
                            Sign in to your account below.
                        </span>
                    </div>
                    <div class="form-content">
                        <div class="input-group input-light">
                            <h6 class="input-title">Email</h6>
                            <input type="email" class="form-control" name="dname" placeholder="example@gmail.com" required>
                        </div>
                        <div class="input-group input-light">
                            <h6 class="input-title">Password</h6>
                            <input type="password" class="form-control" name="dpass" required>
                        </div>
                        <button type="submit" name="logsub" class="btn btn-form btn-secondary-color">
                            <span>Continue</span>
                        </button>
                    </div>
                </form>
                <div class="foreground-img">
					<img src="/assets/images/backgrounds/CaremedSignin.jpg" alt="image">					
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