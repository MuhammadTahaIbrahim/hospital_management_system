<?php 
include("header.php");
?>
<style>

	.bgcolour{
		background-color: #F0F8FF;
	}
	.child1{
		
	}
	.child2{
		margin-top: 65px;
	}
	.bgimg1 {
    background-color: #DBE9FA;
    background-image: url(../assets/images/demos/demo-1/banner/banner-cta.png);
    background-size: 660px;
    background-position: right top;
}

	

</style>
		<main  class="main ">
			<!------------------------------------------------
			hero slider - start
			------------------------------------------------>
			<div class="bgcolour intro-slider intro-slider-1 owl-carousel owl-theme owl-nav-inside owl-light slide-animate mb-0" data-toggle="owl" data-owl-options='{
					"dots": false,
					"nav": false, 
					"responsive": {
						"1200": {
							"nav": true
						}
					}
				}'>
				<!-- 
					background image is added through css and can be modified in the _sections.scss file
					the image is added to the .bg-section-1 class.
				-->
				<div style="margin-top:120px;" class="banner ">
					<div class="container">
						<div class="banner-content">
							<h1 class="banner-title">
								Doctors who treat with care.
							</h1>
							<p class="banner-info">
									Our skilled doctors have tremendous experience with wide
									range of diseases to serve the needs of our patients.</p>
							<div class="banner-actions">
								<!-- <a href="appointment-step1.php" class="btn btn-secondary-color">
									<span>Book an Appointment</span>
								</a> -->
								<!-- <a href="how-it-works.php" class="btn">
									<span>Learn More</span>
								</a> -->
							</div>
						</div>
						
					
						
						 <div class="imghome">
							<img src="../assets/images/demos/demo-1/banner/hero1.png" alt="Banner-slide">
						</div> 
					</div>
				</div>
				<!-- 
					background image is added through css and can be modified in the _sections.scss file
					the image is added to the .bg-section-2 class.
				-->
			
			</div>
			<!------------------------------------------------
			hero slider - end
			------------------------------------------------>
			<!------------------------------------------------
			schedule section - start
			------------------------------------------------>
			<div class="bg-primary-color schedule-section">
				<div class="container">
					<div class="row position-relative">
						<!-- <img src="assets/images/demos/demo-1/puzzle/puzzle-1.png" class="puzzle pr-0 pl-0" alt="Puzzle" width="160" height="217"> -->
						<div class="col-lg-5 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
							<div class="widget">
								<h4 class="widget-title"><i class="far fa-clock"></i>Working hours</h4>
								<p class="widget-desc">
									Please check below for our working hours throughout
									the week excluding national holidays.
								</p>
								<div class="widget-hours">
									<span>Monday — Friday</span>
									<span class="time">9:00<sup>AM</sup> — 10:00<sup>PM</sup></span>
								</div>
								<div class="widget-hours">
									<span>Saturday — Sunday</span>
									<span class="time">10:00<sup>AM</sup> — 9:00<sup>PM</sup></span>
								</div>
							</div>
						</div>
						<div class="col-lg-5 offset-lg-1 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
							<div class="widget">
								<h4 class="widget-title"><i class="far fa-heart-rate"></i>Doctors availability</h4>
								<p class="widget-desc">
									Our doctors are available most of the week and if not
									you can always book appointment with other available
									doctors on our panel of expert doctors.
								</p>
								<a href="doctors.php" class="btn btn-sm btn-secondary-color btn-secondary-color-1 ls-0">
									<span>Meet Our Doctors</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!------------------------------------------------
			schedule section - end
			------------------------------------------------>
			<!------------------------------------------------
			disease section - start
			------------------------------------------------>
			<div class="container disease-section">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-12 col-md-8 col-sm-8 col-10">
						<h2 class="ls-n-20 text-center section-heading">Quality care for you and the ones you love.</h2>
					</div>
				</div>
				<div class="blog-slider row d-flex justify-content-center">
					<div class="col-lg-4 col-md-8 col-sm-8 col-10">
						<div class="card">
							<div class="card-heading">
								<figure>
									<i class="fal fa-head-side-cough"></i>
								</figure>
								<h4 class="card-title">Common<br>Conditions</h4>
							</div>
							<div class="card-content">
								<ul class="card-menu ls-20">
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Cold and Flu</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Urinary Track Infections</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Sinus Infections</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Pink Eye</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Bacterial Infections</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">STDs</a></li>
								</ul>
								<div class="btn-link">
									<a href="departments-1.php">Learn More</a><i class="far fa-caret-right"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-8 col-sm-8 col-10">
						<div class="card">
							<div class="card-heading">
								<figure>
									<i class="fal fa-lungs"></i>
								</figure>
								<h4 class="card-title">Ongoing<br>Conditions</h4>
							</div>
							<div class="card-content">
								<ul class="card-menu ls-20">
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Diabetes</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Hypertension</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Asthma</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Depression</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Anxiety</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Thyroid Disorders</a></li>
								</ul>
								<div class="btn-link">
									<a href="departments-1.php">Learn More</a><i class="far fa-caret-right"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-8 col-sm-8 col-10">
						<div class="card">
							<div class="card-heading">
								<figure>
									<i class="fal fa-heartbeat"></i>
								</figure>
								<h4 class="card-title">Everyday<br>Treatments</h4>
							</div>
							<div class="card-content">
								<ul class="card-menu ls-20">
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">PrEP</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Birth Control</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Prescription</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Hair Loss</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Prescription Refills</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="treatments.php" class="item-link">Mental Health</a></li>
								</ul>
								<div class="btn-link">
									<a href="departments-1.php">Learn More</a><i class="far fa-caret-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!------------------------------------------------
			disease section - end
			------------------------------------------------>
			<!------------------------------------------------
			types section - start
			------------------------------------------------>
			<!-- 
				background image is added through css and can be modified in the _sections.scss file
				the image is added to the .bg-section-3 class.
			-->
			<div class="type-section type-section-margin-bottom bg-section bgcolour">
				<div style="height:850px;" class="container-wrapper">
					<div class="">
						<div class="row">
							<div class="col-lg-7 child1">
								<div style="margin-top: 100px;margin-left:20px;" class="banner">
									<div class="banner-content-wrapper h1c">
										<div class="banner">
											<h2 class="banner-title">
												We provide quality care that treats everyone.
											</h2>
											<p style="margin-left:20px;" class="">We provide primary care when you need it, get personalized and <br>
													high quality healthcare by talking to top medical doctors.</p>
										</div>
									</div>
									<br>
									<div class="icon-boxes">
										<div class="icon-box-wrapper">
											<div class="icon-box icon-box-1 text-center">
												<figure>
													<i class="fal fa-user-circle"></i>
												</figure>
												<div class="icon-box-content">
													<h4 class="box-title">Personal</h4>
												</div>
											</div>
										</div>
										<div class="icon-box-wrapper">
											<div class="icon-box icon-box-1 text-center">
												<figure>
													<i class="fal fa-baby-carriage"></i>
												</figure>
												<div class="icon-box-content">
													<h4 class="box-title">Children</h4>
												</div>
											</div>
										</div>
										<div class="icon-box-wrapper">
											<div class="icon-box icon-box-1 text-center">
												<figure>
													<i class="fal fa-users"></i>
												</figure>
												<div class="icon-box-content">
													<h4 class="box-title">Family</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="banner-actions">
										<a href="https://gfxpartner.com/Caremed/membership.html" class="btn btn-secondary-color btn-md">
											<span>View Pricing Plans</span>
										</a>
									</div>
								</div>
							</div>
							<div  class="col-lg-5 child2">
					<img style="height:780px;" src="../assets/images/demos/demo-1/banner/fore.png" alt="image">
				</div>
						</div>
							
					</div>
				</div>
				
            </div>
			
			<!------------------------------------------------
			types section - end
			------------------------------------------------>
			<!------------------------------------------------
			image box section - start
			------------------------------------------------>
			<div class="container image-box-section">
				<h2 class="ls-n-20 text-center section-heading">How does our online program works?</h2>
				<div class="row d-flex justify-content-center">
					<div class="image-box image-over col-lg-4 col-md-8 col-sm-8 col-10">
						<figure>
							<img src="../assets/images/demos/demo-1/banner/img3-1.png" alt="Image-over" width="298" height="461">
						</figure>
						<div class="box-content">
							<h4 class="box-title">Top Doctors</h4>
							<p class="box-desc">
								All of our doctors are highly skilled and have a minimum of
								15 years experience in U.S top healthcare institutions.
							</p>
							<div class="btn-link">
								<a href="doctors.php">Our Doctors</a><i class="far fa-caret-right"></i>
							</div>
						</div>
					</div>
					<div class="image-box image-over col-lg-4 col-md-8 col-sm-8 col-12">
						<figure>
							<img src="../assets/images/demos/demo-1/banner/img3-2.png" alt="Image-over" width="259" height="424">
						</figure>
						<div class="box-content">
							<h4 class="box-title">Convenient</h4>
							<p class="box-desc">
								Book an appointment to video chat with the doctor of your 
								choice from the ease of home using a smartphone.
							</p>
							<div class="btn-link">
								<a href="appointment-step1.php">Download App</a><i class="far fa-caret-right"></i>
							</div>
						</div>
					</div>
					<div class="image-box image-over col-lg-4 col-md-8 col-sm-8 col-12">
						<figure>
							<img src="../assets/images/demos/demo-1/banner/img3-3.png" alt="Image-over" width="325" height="461">
						</figure>
						<div class="box-content">
							<h4 class="box-title">Affordable</h4>
							<p class="box-desc">
								Our pricing plans are quite affordable and you don’t have to
									wait in order to see a doctor in the time of urgency.
							</p>
							<!-- <div class="btn-link">
								<a href="membership.php">Pricing Plans</a><i class="far fa-caret-right"></i>
							</div> -->
						</div>
					</div>
				</div>
				
			</div>
			<!------------------------------------------------
			image box section - end
			------------------------------------------------>
			<!------------------------------------------------
			type section - start
			------------------------------------------------>
			<!-- 
				background image is added through css and can be modified in the _sections.scss file
				the image is added to the .bg-section-4 class.
			-->
			<div class="bg-section bgcolour type-section type-section-2">
				<div class="container-wrapper">
					<div class="container">
						<div class="banner-content">
							<div class="row">
								<div class="col-lg-12 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
									<div class="banner-content-wrapper">
										<h2 class="banner-title">
											The mission of quality & our core values.
										</h2>
										<p class="banner-info">
											Our mission it to improve the world’s health through compassionate and afforable care through innovation.
										</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
									<div class="icon-box icon-box-left">
										<figure>
											<i class="fal fa-wheelchair"></i>
										</figure>
										<div class="icon-box-content">
											<h4 class="box-title">Put the patient first</h4>
										</div>
									</div>
								</div>
								<div class="col-lg-4 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
									<div class="icon-box icon-box-left">
										<figure>
											<i class="fal fa-user-nurse"></i>
										</figure>
										<div class="icon-box-content">
											<h4 class="box-title">Take personal ownership</h4>
										</div>
									</div>
								</div>
								<div class="col-lg-4 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
									<div class="icon-box icon-box-left">
										<figure>
											<i class="fal fa-stethoscope"></i>
										</figure>
										<div class="icon-box-content">
											<h4 class="box-title">Celebrate the art of medicine</h4>
										</div>
									</div>
								</div>
								<div class="col-lg-4 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
									<div class="icon-box icon-box-left">
										<figure>
											<i class="fal fa-syringe"></i>
										</figure>
										<div class="icon-box-content">
											<h4 class="box-title">Be fast, but don't hurry</h4>
										</div>
									</div>
								</div>
								<div class="col-lg-4 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
									<div class="icon-box icon-box-left">
										<figure>
											<i class="fal fa-heart-circle"></i>
										</figure>
										<div class="icon-box-content">
											<h4 class="box-title">Always work with integrity</h4>
										</div>
									</div>
								</div>       
								<div class="col-lg-4 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
									<div class="icon-box icon-box-left">
										<figure>
											<i class="fal fa-microscope"></i>
										</figure>
										<div class="icon-box-content">
											<h4 class="box-title">Be inquisitive and discover</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
									<div class="banner-actions">
										<a href="appointment-step1.php" class="btn btn-primary-color">
											<span>Book an Appointment</span>
										</a>
										<!-- <a href="how-it-works.php" class="btn">
											<span>Learn More</span>
										</a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="foreground-img">
					<img src="../assets/images/demos/demo-1/banner/banner-big-2-fore.png" alt="image">					
				</div>
			</div>
			<!------------------------------------------------
			type section - end
			------------------------------------------------>
			<!------------------------------------------------
			cta section - start
			------------------------------------------------>
			<!-- 
				background image is added through css and can be modified in the _sections.scss file
				the image is added to the .bg-section-5 class.
			-->
			<div class="banner banner-simple cta-section cta-section-1 bg-section bgimg1">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
							<div class="banner-content">
								<div class="banner-heading">
									<h2 class="banner-title">Don’t delay care for you and those you love.</h2>
								</div>
								<div class="banner-actions">
									<a href="appointment-step1.php" class="btn btn-secondary-color">
									<span>Book an Appointment</span>
								</a>
									<!-- <a href="how-it-works.php" class="btn">
									<span>Learn More</span>
								</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="foreground-img">
					<img src="assets/images/demos/demo-1/banner/banner-cta-fore.png" alt="image">					
				</div>
			</div>
			<!------------------------------------------------
			cta section - end
			------------------------------------------------>
		</main>
		<?php 
include("footer.php");
?>