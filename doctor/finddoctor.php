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
                    <h2 class="page-title">Doctors</h2>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="index.php">Doctors</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Find Doctors</li>
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
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                        <h2 class="ls-n-20 text-center section-heading mb-3">Find A Doctor</h2>
                        <div class="filter-form mb-2">
                            <a href="#" class="btn btn-form grid-filter-item filter-clear ls-20" data-filter="*">
                                <span>Find Doctors</span>
                            </a>
                            <div class="input-group input-light">
                                <div class="form-control select-control">Speciality<i class="far fa-angle-down"></i></div>
                                <ul class="option-menu grid-filter" data-container="#doctors">
                                <?php

$sql = "SELECT * FROM department";
$result=mysqli_query($conn, $sql);
while($row1= mysqli_fetch_array($result)) { 
    
    ?>
                                    <li class="option-list grid-filter-item" data-filter=".pf-anesthesiologist"><span class="option"><i class="far fa-caret-right"></i><a href="finddoctor.php?sid=<?php echo $row1['did']; ?><?php  ?>"><?php echo $row1['dname']; ?></a></span></li>
                                    <?php
                               }
                              ?>
                                </ul>
                            </div>                       
<!-- ------------------city---------------------- -->
                            <div class="input-group input-light mx-4">
                                <div class="form-control select-control">City<i class="far fa-angle-down"></i></div>
                                <ul class="option-menu grid-filter" data-container="#doctors">
                                <?php

$sql = "SELECT * FROM city";
$result=mysqli_query($conn, $sql);
while($row1= mysqli_fetch_array($result)) { 
    
    ?>
                                    <li class="option-list grid-filter-item" data-filter=".pf-anesthesiologist"><span class="option"><i class="far fa-caret-right"></i><a href="finddoctor.php?cid=<?php echo $row1['c_id']; ?><?php  ?>"><?php echo $row1['c_name']; ?></a></span></li>
                                    <?php
                               }
                              ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <!------------------------------------------------
		    doctor list - end
		    ------------------------------------------------>

                <div class="row  grid-container" id="doctors" data-layout="fitRows">
                <?php
                        $q = "SELECT doctor.doc_id, doctor.doc_name, doctor.doc_img, doctor.doc_des, department.did, department.dname, city.c_id, city.c_name FROM doctor 
                              JOIN department ON doctor.doc_didfk = department.did 
                              JOIN city ON doctor.doc_cityid = city.c_id";
            
                        if (isset($_GET['sid'])) {
                            $specialty_id = $_GET['sid'];
                            $q .= " WHERE doctor.doc_didfk = '" . $specialty_id . "'";
                        }
            
                        if (isset($_GET['cid'])) {
                            $city_id = $_GET['cid'];
                            $q .= (isset($_GET['sid']) ? " AND" : " WHERE") . " doctor.doc_cityid = '" . $city_id . "'";
                        }
            
                        $result1 = mysqli_query($conn, $q);
            
                        while ($row = mysqli_fetch_array($result1)) {

// if(isset($_GET['sid'])  && ($_GET['cid'])){
//     $id=$_GET['sid'];
//     $cid=$_GET['cid'];
//     $q="SELECT doctor.doc_id, doctor.doc_name, doctor.doc_img, doctor.doc_des, department.did, department.dname FROM doctor JOIN department ON doctor.doc_didfk = department.did WHERE doctor.doc_didfk='".$id."'";
// }
// else {
//     $q = "SELECT doctor.doc_id, doctor.doc_name, doctor.doc_img, doctor.doc_des, department.did, department.dname FROM doctor JOIN department ON doctor.doc_didfk = department.did";
// }
// $result1=mysqli_query($conn,$q);
// while($row = mysqli_fetch_array($result1)){
?>
<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 pf-pathologists">
    <div class="image-box doctor-card mt-3">
        <figure>
            <a href="doctors-detailed.php?id=<?php echo $row['doc_id']?>">
                <img src="<?php echo "../admin/images/" . $row['doc_img'] ?>" class="w-100" alt="Doctor" width="370" height="407">
                <div class="hover">
                    <div class="circle">
                        <i class="fas fa-link"></i>
                    </div>
                </div>
            </a>
        </figure>
        <div class="box-content">
            <h4 class="box-title"><?php echo $row['doc_name']?></h4>
            <p class="doctor-cat" value="<?php echo $row['did']; ?>"><?php echo $row['dname']; ?></p>
            <p class="doctor-cat" value="<?php echo $row['c_id']; ?>"><?php echo $row['c_name']; ?></p>
            <p class="box-desc">
                <?php echo $row['doc_des']?>
            </p>
            <a href="javascript:;" class="btn-toggle"><i class="fas fa-plus-circle"></i></a>
        </div>
    </div>
</div>
<?php 
}
?>
                 
                </div>
            </div>
            <!------------------------------------------------
		    doctor list - end
		    ------------------------------------------------>
            <div class="bg-light-color explore-section">
				<div class="container ml-3">
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