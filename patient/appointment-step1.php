<?php 
include("header.php");
?>
        <main class="main">
            <!------------------------------------------------
		    page header - start
		    ------------------------------------------------>
            <div class="page-header bg-more-light">
                <div class="container">
                    <h2 class="page-title">Appointment</h2>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="index.php">Appointment</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Step - 1</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!------------------------------------------------
		    page header - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    step bar - start
		    ------------------------------------------------>
            <div class="bg-secondary-color">
                <div class="container">
                    <div class="step-bar">
                        <div class="steps-progress">
                            <div class="progress-indicator" style="width: 0%;"></div>
                        </div>
                        <ul class="nav-step">
                            <li class="nav-item active">
                                <div class="nav-link">
                                    <div class="check-circle">1</div>
                                    <span>Select a doctor</span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="check-circle">2</div>
                                    <span>Book Apointment</span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="check-circle">3</div>
                                    <span>Booked</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!------------------------------------------------
		    step bar - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    doctor filter section - start
		    ------------------------------------------------>
            <div class="container doctor-filter-section padding-small">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-sm-8 col-10">
                        <h2 class="ls-n-20 line-height-1 mb-3">Select a doctor</h2>
                    </div>
                </div>
                <!-- <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-sm-8 col-10">
                        <div class="doctor-filter-form d-xl-flex mb-4">
                            <div class="filter-item">
                                <span class="ls-0">Showing doctors in:</span>
                                <div class="input-group input-light">
                                    <input type="text" class="form-control" placeholder="Alabama">
                                </div>
                            </div>
                            <div class="filter-item">
                                <span>for</span>
                                <div class="input-group input-light">
                                    <div class="form-control select-control">My Children<i class="far fa-angle-down"></i></div>
                                    <ul class="option-menu">
                                        <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>Myself</span></li>
                                        <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>My Children</span></li>
                                        <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>My Parents</span></li>
                                        <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>Someone Else</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-item">
                                <span>on</span>
                                <div class="input-group input-light input-calendar-light">
                                    <input type="text" id="form-calendar-light" class="form-control" placeholder="12/21/2020">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                            </div>
                            <a href="javascript:;" class="btn btn-form btn-primary-color">
                                <span>Apply</span>
                            </a>
                        </div>
                    </div>
                </div> -->
                <?php
                $q = "SELECT * from doctor";
                                    $result = mysqli_query($conn, $q);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        
                                        ?>

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-sm-8 col-10">
                        <div class="doctor-menu mt-3">
                            <div class="blog blog-doctor d-md-flex">
                            <figure>
                             <img src="<?php echo "../admin/images/" .$row['doc_img'] ?>" class="img" alt="img" width="143" height="143">
                          </figure>

                                <div class="blog-content">
                                    <h4 class="doctor-name mb-0 ls-n-20"><?php echo $row['doc_name']; ?></h4>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                        </div>
                                        <span>4.9/5.0</span>
                                    </div>
                                    <p class="doctor-info">Top 50 Medical School <span class="text-divider">|</span> 6 years experience</p>
                                    <div class="btn-link">
                                        <a href="doctors-detailed.php">Profile and Reviews</a><i class="far fa-caret-right"></i>
                                    </div>
                                </div>
                                <a href="appointment-step2.php?id=<?php echo $row['doc_id']?>" class="btn btn-form btn-secondary-color">
                                    <span>Book</span>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php
                                    }
                                    ?>
                <div class="pagination mt-5 justify-content-start">
                    <a class="active" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fas fa-ellipsis-h"></i></a>
                    <a href="#">12</a>
                    <a href="#"><i class="far fa-caret-right"></i></a>
                </div>
            </div>
            <!------------------------------------------------
		    doctor filter section - end
		    ------------------------------------------------>
        </main>
        <?php 
include("footer.php");
?>