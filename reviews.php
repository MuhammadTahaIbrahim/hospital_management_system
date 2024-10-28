<?php 
include("admin/config.php");
include("header.php");







?>
        <main class="main">
            <!------------------------------------------------
			page header - start
			------------------------------------------------>
            <div class="page-header bg-more-light">
                <div class="container">
                    <h2 class="page-title">Our Reviews</h2>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="index.php">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!------------------------------------------------
			page header - end
			------------------------------------------------>
            <!------------------------------------------------
			review section - start
			------------------------------------------------>
            <div class="container review-section">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">

                    </div>
                </div>
                <?php 
                $fetch = "SELECT * from `review`";
                $result = mysqli_query($conn,$fetch);
                if($result){
                    if(mysqli_num_rows($result)>0){
                       

                 
                ?>
                <div class="grid-container row" id="reviews" data-layout="fitRows">
                    <?php 
                     while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0 pf-recent">
                        <div class="card card-review text-center mt-3">
                            <figure>
                                <img src="assets/images/avatar/avatar-6.png" class="avatar customer-avatar" alt="Avatar" width="102" height="102">
                                <img src="assets/images/demos/demo-1/icons/icon-quote.png" class="quote-icon" alt="Icon-quote" width="55" height="55">
                            </figure>
                            <div class="card-content">
                                <h4 class="review-author"><?php echo $row['rev_name']?></h4>
                                <span class="review-city"><?php echo $row['rev_email']?></span>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                    </div>
                                </div>
                                <p class="review-desc">
                                <?php echo $row['rev_msg']?>
                                </p>
                            </div>
                        </div>
                    </div>
                   <?php 
                          }
                        }
                    }
                   ?>
                </div>
            </div>
            <!------------------------------------------------
			review section - end
			------------------------------------------------>
            <!------------------------------------------------
		    review form - start
		    ------------------------------------------------>
            <div class="bg-more-light review-form-section">
                <div class="container">
                    <form action="review.php" class="review-form" method="POST">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                                <h3 class="form-title ls-n-20">Write a review</h3>
                            </div>
                        </div>
                        <div class="row row-joined">
                            <div class="col-lg-6 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                                <div class="input-group input-light input-review">
                                    <input  type="text" class="form-control" placeholder="Name *" name="name">
                                </div>
                                <div class="input-group input-light input-review">
                                    <input name="email" type="text" class="form-control" placeholder="Email *">
                                </div>
                                
                            </div>
                            <div class="col-lg-6 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                                <div class="input-group input-light input-review h-100">
                                    <textarea name="review" class="form-control text-area h-100" placeholder="Write review *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 offset-lg-0 d-lg-flex justify-content-lg-center col-sm-8 offset-sm-2 col-10 offset-1">
                                <div class="banner-actions">
                                    <button type="submit" name="register" value="register" class="btn btn-form btn-secondary-color mr-0">
                                        <span>Submit Review</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!------------------------------------------------
		    review form - end
		    ------------------------------------------------>
            <div class="bg-light-color">
				<div class="container pt-5 pb-5 pt-md-15 pb-md-15">
					<h2 class="ls-n-20 text-center mb-3">More to explore.</h2>
					<div class=" mr-md-12 ml-md-12">
						<div class="owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{
							"margin": 60,
							"dots": false,
							"nav": false,
							"loop": false,
							"responsive": {
								"576": {
									"items": 1
								},
								"992": {
									"items": 2
								},
								"1200": {
									"items": 3
								}
							}
						}'>
							<div class="image-box explore-card text-center">
								<figure>
									<img src="assets/images/demos/demo-1/banner/explore-1.jpg" class="w-100" alt="Blog" width="270" height="277">
								</figure>
								<div class="box-content">
									<h4 class="box-title">Book an <br> appointment</h4>
								</div>
							</div>
							<div class="image-box explore-card text-center">
								<figure>
									<img src="assets/images/demos/demo-1/banner/explore-2.jpg" class="w-100" alt="Blog" width="270" height="277">
								</figure>
								<div class="box-content">
									<h4 class="box-title">How does <br> it work?</h4>
								</div>
							</div>
							<div class="image-box explore-card text-center">
								<figure>
									<img src="assets/images/demos/demo-1/banner/explore-3.jpg" class="w-100" alt="Blog" width="270" height="277">
								</figure>
								<div class="box-content">
									<h4 class="box-title">What we <br> treat</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </main>
        <?php 
include("footer.php");
?>