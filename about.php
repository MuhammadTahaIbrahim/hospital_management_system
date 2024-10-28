<?php 
include("header.php");
include("admin/config.php");
?>
<style>

.bgcolour{
		background-color: #F0F8FF;
        background-image: url(assets/images/demos/demo-1/banner/banner-big-fore.png);
    background-size: 660px;
    background-position: right -20px top 150px;
    
	}
    
</style>
        <main class="main">
            <!------------------------------------------------
		    page header - start
		    ------------------------------------------------>
            <div class="page-header bg-more-light">
                <div class="container">
                    <h2 class="page-title">About Us</h2>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="index.php">About Us</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!------------------------------------------------
		    page header - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    about content - start
		    ------------------------------------------------>
            <?php 
                                                     $query = "SELECT * FROM aboutus";
                                                     $result = mysqli_query($conn, $query);
                                                     while ($row = mysqli_fetch_array($result)) {
                                                     ?>
            <div class="container about-primary-section">
                <div class="row">
                    <div class="col-lg-6 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 order-lg-1 order-2">                        
                        <div class="banner-content">
                            <h3 class="banner-title"><?php echo $row['a_title']?></h3>
                            <p>
                                No matter where you are or how busy your life gets, you can 
                                talk to one of our many friendly and knowledgable doctors
                                online at a time that works with your schedule.
                            </p>
                            <p>
                                Day dry face darkness were divide whose replenish won't the and 
                                shall man deep evening days open moving evening have man great
                                gathering fruit tree grass gathering us third grass made yielding
                                saying earth to creepeth creepth she'd air female appear was 
                                brought signs likeness thing.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 order-lg-2 order-1 d-lg-inline-flex justify-content-lg-end">
                        <figure>
                            <img src="<?php echo "admin/images/". $row['a_img']?>" class="img-aside rounded-img" alt="Banner-aside" width="470" height="447">
                            <img src="assets/images/demos/demo-1/puzzle/puzzle-1.png" class="puzzle" alt="Puzzle" width="160" height="217">
                        </figure>
                    </div>
                    <div class="col-lg-12 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 order-3">
                        <p>
                            No matter where you are or how busy your life gets, you can 
                            talk to one of our many friendly and knowledgable doctors
                            online at a time that works with your schedule.
                            Day dry face darkness were divide whose replenish won't the and 
                            shall man deep evening days open moving evening have man great
                            gathering fruit tree grass gathering us third grass made yielding
                            saying earth to creepeth creepth she'd air female appear was 
                            brought signs likeness thing.
                        </p>
                        <h2 class="sign"><img src="assets/images/other/signature.png"></h2>
                        <h5 class="mb-0"><?php echo $row['a_name']?></h5>
                        <span>Chief Executive  Officer</span>
                    </div>
                </div>
            </div>
            <?php }?>
            <!------------------------------------------------
		    about content - end
		    ------------------------------------------------>

            <!------------------------------------------------
			team section - start
			------------------------------------------------>
            
            <div style="margin-top:0px;" class="container team-section">
                <h2 class="ls-n-20 text-center mb-0">Meet our talented<br>team members.</h2>
                <div class="row">
                <?php 
                                                     $q = "SELECT * FROM member" ;
                                                     $r = mysqli_query($conn, $q);
                                                     while ($row1 = mysqli_fetch_array($r)) {
                                                     ?>
                    <div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                        <div class="image-box doctor-card team-card mt-3">
                            <figure>
                                <img src="<?php echo "admin/images/". $row1['m_img']?>" class="w-100" alt="Member" width="370" height="407">
                            </figure>
                            <div class="box-content text-center">
                                <h4 class="box-title"><?php echo $row1['m_name']?></h4>
                                <p class="doctor-cat"><?php echo $row1['m_role']?></p>
                                <ul class="social-links d-flex justify-content-center mb-0">
                                    <li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-link"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
<?php 
}?>
                </div>
            </div>
            <!------------------------------------------------
			team section - end
			------------------------------------------------>
            <!------------------------------------------------
			review section - start
			------------------------------------------------>
			<!-- 
				background image is added through css and can be modified in the _sections.scss file
				the image is added to the .bg-section-11 class.
			-->
			<div class="review-bg-section bg-section type-section-margin-bottom bgcolour">
				<div class="container position-relative">
					<div class="row">
						<div class="col-lg-7 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
							<div class="banner-content">
								<h2 class="banner-title">
									Hear from what our patients say.
								</h2>
								<div class="review-carousel owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
									"nav": false, 
									"dots": false,
									"margin": 35,
									"responsive": {
										"768": {
											"nav": true
										}
									}
								}'>
									<div class="card card-review review-carousel align-items-start">
										<div class="card-heading align-items-start">
											<figure>
												<img src="assets/images/demos/demo-1/banner/avatar-6.png" class="avatar customer-avatar" alt="Avatar" width="102" height="102">
												<div class="card-review-quote">
													<span>“</span>
												</div>
											</figure>
											<div class="review-info">
												<h4 class="review-author">Jessica Blake</h4>
												<span class="review-city">New York, NY</span>
												<div class="ratings-container">
													<div class="ratings">
														<div class="ratings-val" style="width: 100%;"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="card-content">
											<p class="review-desc ls-20">
												“This is a wonderful service for people who are curently
												without Medical Insurance. The doctor was very friendly and
												listened to my condition thoroughly with explaination to the
												treatment and appropriate prescription.”
											</p>
										</div>
									</div>
									<div class="card card-review review-carousel align-items-start">
										<div class="card-heading align-items-start">
											<figure>
												<img src="assets/images/demos/demo-1/banner/avatar-7.png" class="avatar customer-avatar" alt="Avatar" width="102" height="102">
												<img src="assets/images/demos/demo-1/icons/icon-quote.png" class="quote-icon" alt="Icon-quote" width="55" height="55">
											</figure>
											<div class="review-info">
												<h4 class="review-author">Jessica Blake</h4>
												<span class="review-city">New York, NY</span>
												<div class="ratings-container">
													<div class="ratings">
														<div class="ratings-val" style="width: 100%;"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="card-content">
											<p class="review-desc ls-20">
												“This is a wonderful service for people who are curently
												without Medical Insurance. The doctor was very friendly and
												listened to my condition thoroughly with explaination to the
												treatment and appropriate prescription.”
											</p>
										</div>
									</div>
								</div>
								<div class="banner-actions">
									<a href="reviews.php" class="btn btn-action btn-secondary-color btn-md">
                                        <span>Read All Reviews</span>
                                    </a>
								</div>
							</div>
						</div>
					</div>
					<div class="card-rating">
						<div class="ratings-container">
							<div class="ratings">
								<div class="ratings-val" style="width: 100%;"></div>
							</div>
						</div>
						<p class="card-info ls-0">
							Over 400,000 patients treated and cared for.
						</p>
						<div class="btn-link">
							<a href="reviews.php">Read reviews</a><i class="far fa-caret-right"></i>
						</div>
					</div>
						
				</div>
				<div class="foreground-img">
					<img src="assets/images/demos/demo-3/banner/banner-big-fore.png" alt="Banner-slide">
				</div>
            </div>
			<!------------------------------------------------
			review section - end
			------------------------------------------------>
            <!------------------------------------------------
		    FAQ section - start
		    ------------------------------------------------>
            <div class="faq-section padding-small">
                <div class="container">
                    <h2 class="ls-n-20 text-center">FAQs</h2>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-sm-8 offset-sm-2 col-10 offset-1">
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
            explore section - start
			------------------------------------------------>
			<div class="bg-light-color explore-section">
				<div class="container">
					<h2 class="ls-n-20 text-center section-heading">More to explore.</h2>
                    <div class="explore-section-row">
                        <div class="image-box explore-card text-center">
                            <a href="appointment-step1.php">
                                <figure>
                                    <img src="assets/images/demos/demo-1/banner/explore-1.jpg" class="w-100" alt="Blog">
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
                            <a href="how-it-works.php">
                            <figure>
                                <img src="assets/images/demos/demo-1/banner/explore-2.jpg" class="w-100" alt="Blog">
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
                            <a href="treatments.php">
                            <figure>
                                <img src="assets/images/demos/demo-1/banner/explore-3.jpg" class="w-100" alt="Blog">
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
            explore section - end
			------------------------------------------------>
        </main>
        <?php 
include("footer.php");
?>