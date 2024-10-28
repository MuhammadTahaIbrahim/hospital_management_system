<?php 
include("header.php");
include("admin/config.php");
?>
        <main class="main">
            <!------------------------------------------------
		    page header - start
		    ------------------------------------------------>
            <div class="page-header bg-more-light">
                <div class="container">
                    <h2 class="page-title">Doctors</h2>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="index.php">Doctors</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Doctors</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!------------------------------------------------
		    page header - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    doctor list - start
		    ------------------------------------------------>
            <div class="container doctor-list-section">
                <div class="row" id="doctors" data-layout="fitRows">
                    
                <?php 
                $select = "SELECT * FROM doctor As d INNER JOIN department AS de ON de.did = doc_didfk";
                $result = mysqli_query($conn, $select);
                if($result){
                    while($row = mysqli_fetch_array($result)){
                  
                        
                  
                  
                ?>

                    
                    <div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 pf-pathologists">
                        
                        <div class="image-box doctor-card mt-3">
                            <figure>
                                <a href="doctors-detailed.php?id=<?php echo $row['doc_id']?>">
                                  <img src="<?php echo "admin/images/" . $row['doc_img'] ?>" class="w-100" alt="Doctor" width="370" height="407">
                                    <div class="hover">
                                        <div class="circle">
                                            <i class="fas fa-link"></i>
                                        </div>
                                    </div>
                                </a>
                            </figure>
                            <div class="box-content">
                                <h4 class="box-title"><?php echo $row['doc_name']?></h4>
                                <p class="doctor-cat"><?php echo $row['dname']; ?></p>
                                <p class="box-desc">
                                <?php echo $row['doc_des']?>
                                </p>
                                <a href="javascript:;" class="btn-toggle"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                        <?php 
                        
                    }
                }
                        ?>
                 
                </div>
            </div>
            <!------------------------------------------------
		    doctor list - end
		    ------------------------------------------------>
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