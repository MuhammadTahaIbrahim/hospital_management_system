<?php 
include("header.php");
include("admin/config.php");


if(isset($_GET["id"])){
    $id = $_GET["id"];
    $select = "SELECT * FROM doctor As d INNER JOIN department AS de ON de.did = doc_didfk WHERE doc_id = '$id'";
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
                    <h2 class="page-title">Doctors Detail</h2>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="index.php">Doctors</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!------------------------------------------------
		    page header - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    content - start
		    ------------------------------------------------>
            <div class="container doctor-detailed-section padding-small">
                <div class="row">
                   <?php 
                   ?>
                    <div class="col-lg-7 offset-lg-0 order-lg-1 col-sm-8 offset-sm-2 col-10 offset-1 order-2">
                        <div class="banner-content">
                            <h3 class="banner-title"><?php echo $row['doc_name']?></h3>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                </div>
                                <span>4.8/5.0</span>
                            </div>
                            <p class="banner-desc mb-3">Top 50 Medical School <span class="text-divider">|</span> 8 years experience</p>
                            <p class="banner-desc"><?php echo $row['doc_des']?></p>
                            <div class="banner-subcontent ls-20">
                                <h4 class="subcontent-title ls-n-20">Qualification and experience</h4>
                                <ul class="subcontent-menu">
                                    <li class="menu-item"><span>Speciality:</span><?php echo $row['dname']?></li>
                                   
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php 
                     
                    ?>
                    <div class="col-lg-5 offset-lg-0 order-lg-2 col-sm-8 offset-sm-2 col-10 offset-1 order-1">
                        <div class="doctor-detailed-image">
                            <figure>
                            <img src="<?php echo "admin/images/" . $row['doc_img'] ?>"class="img-aside" alt="Banner-aside" width="470" height="447">
                                <img src="assets/images/demos/demo-1/puzzle/puzzle-1.png" class="puzzle" alt="Puzzle" width="160" height="217">
                            </figure>
                        </div>
                    </div>
                </div>


            </div>
            <!------------------------------------------------
		    content - end
		    ------------------------------------------------>

        </main>
        <?php 
include("footer.php");
?>