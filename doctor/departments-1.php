<?php 
include("header.php");
include("config.php");
?>
        <main class="main">
            <!------------------------------------------------
		    page header - start
		    ------------------------------------------------>
            <div class="page-header bg-more-light">
                <div class="container">
                    <h2 class="page-title"> Departments</h2>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="index.php">Departments</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!------------------------------------------------
		    page header - end
		    ------------------------------------------------>
            <div class="container department-list-section">
                <div class="row">
                    <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-12 offset-lg-0">
                        <h2 class="ls-n-20 text-center section-heading">Check all the areas in which we can help you.</h2>
                    </div>
                </div>
                <div class="row">
                <?php
                         
                         $query = "SELECT * FROM department";
                         $result = mysqli_query($conn, $query);
                         while ($row = mysqli_fetch_array($result)) {
                         ?>
                    <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0">
                 
                        <div class="icon-box hover-border text-center">
                            <a href="departments-detailed.php?id=<?php echo $row['did']?>">
                            <figure>
                                <i class="fal fa-hospital"></i>
                            </figure>
                            </a>
                            <div class="icon-box-content">
                        
                                <a href="departments-detailed.php?id=<?php echo $row['did']?>"><h4 class="box-title"><?php echo $row['dname']?></h4></a>
                                <p class="box-desc">
                                
                                </p>
                                <div class="btn-link">
                                    <a href="departments-detailed.php?id=<?php echo $row['did']?>">Learn More</a><i class="far fa-caret-right"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php 
                        
                    }?>

                 
                    
                  
                  
                  
                  
                   
                </div>
            </div>
            <div class="bg-light-color explore-section">
				<div class="container">
					<h2 class="ls-n-20 text-center section-heading">More to explore.</h2>
                    <div class="explore-section-row">
                        <div class="image-box explore-card text-center">
                            <a href="#">
                                <figure>
                                    <img src="assets/images/demos/demo-1/banner/explore-1.jpg" class="w-100" alt="Blog" width="270" height="277">
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
                                <img src="assets/images/demos/demo-1/banner/explore-2.jpg" class="w-100" alt="Blog" width="270" height="277">
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
                                <img src="assets/images/demos/demo-1/banner/explore-3.jpg" class="w-100" alt="Blog" width="270" height="277">
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
        </main>
        <?php 
include("footer.php");
?>