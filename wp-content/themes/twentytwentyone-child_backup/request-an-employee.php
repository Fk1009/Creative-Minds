<?php /* Template Name: Employee Page */ ?>
<?php get_header(); ?>

	<section class="common-box pt-80  pb-80 " data-aos="fade-up" data-aos-duration="1500">
		<div class="container h-100">
			<div class="row">

				<div class="col-md-12">
					<div class="">
						<p data-aos="fade-right" data-aos-duration="1500" class="f-600 text-center">Are you looking for an
							outstanding new employee for manufacturing, light industrial, IT or administrative
							positions? Please fill out our form below and Bear Staffing Services' knowledgeable staffing
							experts will contact you to further discuss your needs.</p>
						<form class="row g-3 request-form text-left mt-5 bg-light-blue p-3">
							<div class="col-md-12  mt-2 mb-2">
								<label for="inputState" class="form-label mb-2" >Are you a Job Seeker or a Company?</label>
								<select id="inputState" class="form-select">
									<option selected>Please Select...</option>
									<option>Job Seeker</option>
									<option>Company</option>
								</select>								
								
							</div>
							<div class="col-md-6 mt-2 mb-2">
								<label for="input-first-name" class="form-label label-d-none" >First Name</label>
								<input type="text" class="form-control" id="input-first-name" placeholder="First Name">
							</div>
							<div class="col-6 mt-2 mb-2">
								<label for="input-last-name" class="form-label label-d-none" >Last Name</label>
								<input type="text" class="form-control" id="input-last-name" placeholder="Last Name*" required>
							</div>
							<div class="col-6 mt-2 mb-2">
								<label for="input-phone" class="form-label label-d-none" >Phone Number</label>
								<input type="text" class="form-control" id="input-phone"
									placeholder="Phone Number*" required>
							</div>
							<div class="col-md-6 mt-2 mb-2">
								<label for="input-email" class="form-label label-d-none" >Email</label>
								<input type="mail" class="form-control" id="input-email" placeholder="Email*" required>
							</div>
							<div class="col-md-6 mt-2 mb-2">
								<label for="input-city" class="form-label label-d-none" >City</label>
								<input type="text" class="form-control" id="input-city" placeholder="City*" required>
							</div>
							<div class="col-md-6 mt-2 mb-2">
								<label for="input-state" class="form-label label-d-none" >State/Region*</label>
								<input type="text" class="form-control" id="input-state" placeholder="State/Region*" required>
							</div>
							<div class="col-md-12  mt-2 mb-2">
								<label for="how-come-to-know" class="form-label mb-2" >How did you hear about Bear Staffing Services?</label>
								<select id="how-come-to-know" class="form-select">
									<option selected>Please Select...</option>
									<option>Google</option>
									<option>Linkdin</option>
								</select>								
								
							</div>
							<div class="col-md-12 mt-2 mb-2">
								<label for="floatingTextarea" class=" label-d-none">How can Creative Mind assist you today?</label>
								<textarea class="form-control" placeholder="How can Creative Mind assist you today?*" id="floatingTextarea"></textarea>
							</div>
							<div class="col-12 text-center mt-2 mb-2">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- second section ends -->

	<section class="common-box industries-we-serve-box pb-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<h2 data-aos="fade-right" data-aos-duration="1500" class="text-center theme-red-font">Industries We Serve
				</h2>
			
				
				<div class="row align-items-center">
					<div class="col-md-3">
						<div class="service-box">
							<a data-aos="fade-right" data-aos-duration="1500"
								class="" href="#">
							<div class="service-small-box text-center " data-aos="fade-right" data-aos-duration="1500">
								<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/icon/training.png" alt="training"
									title="training" />
								<h4>Call Center</h4>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-box">
							<a data-aos="fade-right" data-aos-duration="1500"
								class="" href="#">
							<div class="service-small-box text-center " data-aos="fade-right" data-aos-duration="1500">
								<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/icon/construction.png" alt="construction"
									title="construction" />
								<h4>Distribution</h4>
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-box">
							<a data-aos="fade-right" data-aos-duration="1500"
								class="" href="#">
							<div class="service-small-box text-center " data-aos="fade-right" data-aos-duration="1500">
								<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/icon/fast.png" alt="fast-recruitment"
									title="fast-recruitment" />
								<h4>Manufacturing</h4>
							</div></a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-box">
							<a data-aos="fade-right" data-aos-duration="1500"
								class="" href="#">
							<div class="service-small-box text-center " data-aos="fade-right" data-aos-duration="1500">
								<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/icon/fast.png" alt="fast-recruitment"
									title="fast-recruitment" />
								<h4>Information Technology</h4>
							</div></a>
						</div>
					</div>
				</div>
		</div>
	</section>
	<!-- service tab -->
<?php get_footer(); ?>