<?php 
include("header.php");
include("admin/config.php");


if(isset($_GET["id"])){
    $id = $_GET["id"];
    $select = "SELECT * FROM department WHERE did = '$id'";
$result = mysqli_query($conn, $select);
if($result){
    $row = mysqli_fetch_assoc($result);
 
}}
    
?>
        <main class="main">
            <!------------------------------------------------
		    page header - start
		    ------------------------------------------------>
            <div class="page-header bg-more-light">
                <div class="container">
                    <h2 class="page-title">Department Detail</h2>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="index.php">Department</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!------------------------------------------------
		    page header - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    department detailed section - start
		    ------------------------------------------------>
            <div class="container department-detailed-section padding-small">           
                <div class="row">                    
                    <div class="banner-content blog-content col-lg-7 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                        <div class="banner-content--wrapper">
                            <h3 class="banner-title">  <?php echo $row['dname']?></h3>
                            <p class="justify-content-center">
                            <?php echo $row['ddes']?>
                            </p>
                           
                          
                            
                        </div>
                       
                    </div>
                    <div class="col-lg-5 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 department-detailed-image">
                        <figure class="mb-3">
                        <img src="<?php echo "admin/images/" . $row['dimg']; ?>" class="img-aside" alt="Banner-aside" width="470" height="447">
                            <img src="assets/images/demos/demo-6/puzzle/puzzle-2.png" class="puzzle" alt="Puzzle" width="160" height="217">
                        </figure>
                       
                    </div>
                </div>
            </div>
            <!------------------------------------------------
		    department detailed section - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    FAQ section - start
		    ------------------------------------------------>
            <div class="bg-more-light faq-section padding-small">
                <div class="container">
                    <h2 class="ls-n-20 text-center">FAQs</h2>
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 col-10 offset-1">
                            <div class="accordion accordion-icon" id="accordion-10">
                                <div class="field">
                                    <div class="field-header" id="heading10-1">
                                        <h4 class="field-title">
                                            <a class="accordion-link collapsed" role="button" data-toggle="collapse" href="#collapse10-1" aria-expanded="false" aria-controls="collapse10-1">
                                                COVID-19 Serology/Antibody Testing
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse10-1" class="collapse" aria-labelledby="heading10-1" data-parent="#accordion-10">
                                        <div class="field-body">
                                           <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.</p>
                                        </div>
                                    </div>
                                    
                                </div>
            
                                <div class="field active">
                                    <div class="field-header" id="heading10-2">
                                        <h4 class="field-title">
                                            <a class="accordion-link" role="button" data-toggle="collapse" href="#collapse10-2" aria-expanded="true" aria-controls="collapse10-2">
                                                What is CareMed's policy on controlled substances?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse10-2" class="collapse show" aria-labelledby="heading10-2" data-parent="#accordion-10">
                                        <div class="field-body">
                                            <p>Yes, during your visit the doctor will discuss if taking time off from work or school
                                                    is part of your treatment plan.</p>
                                            <p>If you need an excuse note, you may request one from the doctor during your
                                                    visit. You’ll receive an alert when your excuse note is ready in your account, from
                                                    there you can download to print or email.</p>
                                        </div>
                                    </div>
                                    
                                </div>
            
                                <div class="field">
                                    <div class="field-header" id="heading10-3">
                                        <h4 class="field-title">
                                            <a class="accordion-link collapsed"  role="button" data-toggle="collapse" href="#collapse10-3" aria-expanded="false" aria-controls="collapse10-3">
                                                Can CareMed help with the Coronavirus?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse10-3" class="collapse" aria-labelledby="heading10-3" data-parent="#accordion-10">
                                        <div class="field-body">
                                            <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="field">
                                    <div class="field-header" id="heading10-4">
                                        <h4 class="field-title">
                                            <a class="accordion-link collapsed"  role="button" data-toggle="collapse" href="#collapse10-4" aria-expanded="false" aria-controls="collapse10-4">
                                                Can CareMed Fill My Prescription?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse10-4" class="collapse" aria-labelledby="heading10-4" data-parent="#accordion-10">
                                        <div class="field-body">
                                            <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------------------------
		    FAQ section - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    Explore section - start
		    ------------------------------------------------>
            <div class="bg-light-color explore-section">
				<div class="container">
					<h2 class="ls-n-20 text-center section-heading">More to explore.</h2>
                    <div class="explore-section-row">
                        <div class="image-box explore-card text-center">
                            <a href="#">
                                <figure>
                                    <img src="assets/images/banner/explore-1.jpg" class="w-100" alt="Blog" width="270" height="277">
                                    <div class="hover">
                                        <div class="circle">
                                            <i class="fas fa-link"></i>
                                        </div>
                                    </div>
                                </figure>
                                <div class="box-content">
                                    <h4 class="box-title">Book an<br>appointment</h4>
                                </div>
                            </a>
                        </div>
                        <div class="image-box explore-card text-center">
                            <a href="#">
                            <figure>
                                <img src="assets/images/banner/explore-2.jpg" class="w-100" alt="Blog" width="270" height="277">
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-link"></i>
                                    </div>
                                </div>
                            </figure>
                            <div class="box-content">
                                <h4 class="box-title">How does<br>it work?</h4>
                            </div>
                            </a>
                        </div>
                        <div class="image-box explore-card text-center">
                            <a href="#">
                            <figure>
                                <img src="assets/images/banner/explore-3.jpg" class="w-100" alt="Blog" width="270" height="277">
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-link"></i>
                                    </div>
                                </div>
                            </figure>
                            <div class="box-content">
                                <h4 class="box-title">What we<br>treat</h4>
                            </div>
                            </a>
                        </div>
                    </div>
				</div>
			</div>
            <!------------------------------------------------
		    Explore section - end
		    ------------------------------------------------>
        </main>
        <?php 
include("footer.php");
?>